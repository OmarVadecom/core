<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Http\Controllers\Controller;

class ApplicantController extends Controller
{
    public function applicants(Request $request)
    {
        $data['applicants'] = JobApplication::when($request['job_title'], function ($q) use ($request) {
                                    return $q->where('job_title', 'LIKE', '%' . $request['job_title'] . '%');
                                })->when($request['type'], function ($q) use ($request) {
                                    return $q->where('type', 'LIKE', '%' . $request['type'] . '%');
                                })->when($request['status'] || $request['status'] == '0', function ($q) use ($request) {
                                    return $q->where('status', $request['status']);
                                })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.applicant';
        $data['status']         = 0;

        return view('admin.job.applicant.index', $data);
    }

    public function pending(Request $request)
    {
        $data['applicants'] = JobApplication::where('status', '0')->when($request['job_title'], function ($q) use ($request) {
                                    return $q->where('job_title', 'LIKE', '%' . $request['job_title'] . '%');
                                })->when($request['type'], function ($q) use ($request) {
                                    return $q->where('type', 'LIKE', '%' . $request['type'] . '%');
                                })->when($request['status'] || $request['status'] == '0', function ($q) use ($request) {
                                    return $q->where('status', $request['status']);
                                })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.applicant.pending';
        $data['status']         = 1;

        return view('admin.job.applicant.index', $data);
    }
    public function interviewing(Request $request)
    {
        $data['applicants'] = JobApplication::where('status', '1')->when($request['job_title'], function ($q) use ($request) {
                                    return $q->where('job_title', 'LIKE', '%' . $request['job_title'] . '%');
                                })->when($request['type'], function ($q) use ($request) {
                                    return $q->where('type', 'LIKE', '%' . $request['type'] . '%');
                                })->when($request['status'] || $request['status'] == '0', function ($q) use ($request) {
                                    return $q->where('status', $request['status']);
                                })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.applicant.interviewing';
        $data['status']         = 1;

        return view('admin.job.applicant.index', $data);
    }

    public function selected(Request $request)
    {
        $data['applicants'] = JobApplication::where('status', '2')->when($request['job_title'], function ($q) use ($request) {
                                    return $q->where('job_title', 'LIKE', '%' . $request['job_title'] . '%');
                                })->when($request['type'], function ($q) use ($request) {
                                    return $q->where('type', 'LIKE', '%' . $request['type'] . '%');
                                })->when($request['status'] || $request['status'] == '0', function ($q) use ($request) {
                                    return $q->where('status', $request['status']);
                                })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.applicant.selected';
        $data['status']         = 1;

        return view('admin.job.applicant.index', $data);
    }
    public function rejected(Request $request)
    {
        $data['applicants'] = JobApplication::where('status', '3')->when($request['job_title'], function ($q) use ($request) {
                                    return $q->where('job_title', 'LIKE', '%' . $request['job_title'] . '%');
                                })->when($request['type'], function ($q) use ($request) {
                                    return $q->where('type', 'LIKE', '%' . $request['type'] . '%');
                                })->when($request['status'] || $request['status'] == '0', function ($q) use ($request) {
                                    return $q->where('status', $request['status']);
                                })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.applicant.rejected';
        $data['status']         = 1;

        return view('admin.job.applicant.index', $data);
    }


    public function applicant_details($id)
    {
        $apply = JobApplication::findOrFail($id);
  
        return view('admin.job.applicant.details',compact('apply'));
    }



    public function applicant_delete($apply_id)
    {
        $data = JobApplication::findOrFail($apply_id);

       
        @unlink('assets/front/application/'. $data->file);
        $data->delete();

        
        $notification = array(
            'messege' => 'Application Deleted Successfully',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);

    }

    public function status(Request $request)
    {

        $po = JobApplication::find($request->applicant_id);
        $po->status = $request->status;
        $po->save();


         $notification = array(
            'messege' => 'Application status changed successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }
}
