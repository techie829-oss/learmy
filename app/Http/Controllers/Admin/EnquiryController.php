<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = \App\Models\Enquiry::latest()->paginate(15);
        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function show(\App\Models\Enquiry $enquiry)
    {
        if ($enquiry->status == 'pending') {
            $enquiry->update(['status' => 'read']);
        }
        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function update(Request $request, \App\Models\Enquiry $enquiry)
    {
        $enquiry->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Enquiry status updated!');
    }

    public function destroy(\App\Models\Enquiry $enquiry)
    {
        $enquiry->delete();
        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry deleted!');
    }
}
