<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Event;
use App\Models\Enquiry;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_courses' => Course::count(),
            'total_faculty' => Faculty::count(),
            'total_events' => Event::count(),
            'total_blogs' => Blog::count(),
            'pending_enquiries' => Enquiry::where('status', 'pending')->count(),
        ];

        $recentEnquiries = Enquiry::orderBy('created_at', 'desc')->take(5)->get();
        $upcomingEvents = Event::where('event_date', '>=', now())->orderBy('event_date', 'asc')->take(3)->get();

        return view('admin.dashboard', compact('stats', 'recentEnquiries', 'upcomingEvents'));
    }
}

