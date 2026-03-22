<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $featuredCourses = Course::where('is_featured', true)->take(3)->get();
        $upcomingEvents = Event::where('event_date', '>=', now())->orderBy('event_date', 'asc')->take(3)->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->take(5)->get();
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        
        return view('public.home', compact('featuredCourses', 'upcomingEvents', 'testimonials', 'recentBlogs'));
    }

    public function about()
    {
        return view('public.about');
    }

    public function courses(Request $request)
    {
        $query = Course::query();

        if ($request->filled('category') && in_array($request->category, ['music', 'academic'])) {
            $query->where('category', $request->category);
        }

        $courses = $query->latest()->paginate(9)->withQueryString();
        $activeCategory = $request->get('category', 'all');

        return view('public.courses', compact('courses', 'activeCategory'));
    }

    public function courseShow($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('public.course-details', compact('course'));
    }

    public function faculty()
    {
        $faculties = Faculty::all();
        return view('public.faculty', compact('faculties'));
    }

    public function gallery()
    {
        $images = Gallery::where('type', 'image')->get();
        $videos = Gallery::where('type', 'video')->get();
        return view('public.gallery', compact('images', 'videos'));
    }

    public function events()
    {
        $events = Event::orderBy('event_date', 'desc')->paginate(6);
        return view('public.events', compact('events'));
    }

    public function eventShow($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('public.event-details', compact('event'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('public.blog', compact('blogs'));
    }

    public function blogShow($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('public.blog-details', compact('blog'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        return view('public.testimonials', compact('testimonials'));
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $enquiry = Enquiry::create($validated);

        // Send Email to Admin
        try {
            \Illuminate\Support\Facades\Mail::to('learmy.educoach@gmail.com')->send(new \App\Mail\AdminEnquiryNotification($enquiry));
            
            // Send Acknowledgement Email to User
            \Illuminate\Support\Facades\Mail::to($enquiry->email)->send(new \App\Mail\UserEnquiryAcknowledgement($enquiry));
        } catch (\Exception $e) {
            // Log error or ignore if mail server is not configured correctly during dev
            \Illuminate\Support\Facades\Log::error('Mail Error: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for your enquiry. We will get back to you soon!');
    }
}

