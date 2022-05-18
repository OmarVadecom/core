<?php

namespace App\Http\Controllers\Admin;

use App\Models\Request as AppRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        $data['requests'] = AppRequest::when($request['name'], function ($q) use ($request) {
                                return $q->where('client_name', 'LIKE', '%' . $request['name'] . '%');
                            })->when($request['mail'], function ($q) use ($request) {
                                return $q->where('client_email_address', 'LIKE', '%' . $request['mail'] . '%');
                            })->when(($request['phone']), function ($q) use ($request) {
                                return $q->where('client_phone_number', 'LIKE', '%' . $request['phone'] . '%');
                            })->orderBy('id', 'DESC')->get();

        return view('admin.requests.index', $data);
    }

    public function show($id)
    {
        $request = AppRequest::find($id);
        $request->update(['status' => 1]);
       // get previous user id
       $prev  = AppRequest::where('id', '<', $request->id)->max('id');
       // get next user id
       $next = AppRequest::where('id', '>', $request->id)->min('id');
        return view('admin.requests.details', compact('request','prev','next'));
    }

    public function delete($id)
    {

        $request = AppRequest::findOrFail($id);
        $request->delete();

        $notification = array(
            'messege' => 'Request Deleted successfully!',
            'alert' => 'success',
        );
        return redirect()->back()->with('notification', $notification);
    }

}
