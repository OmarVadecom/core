<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class QuoteController extends Controller
{
    public function all(Request $request)
    {
        $data['quotes'] = Quote::when($request['name'], function ($q) use ($request) {
                                return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                            })->when($request['subject'], function ($q) use ($request) {
                                return $q->where('subject', 'LIKE', '%' . $request['subject'] . '%');
                            })->when($request['status'] || $request['status'] == '0', function ($q) use ($request) {
                                return $q->where('status', $request['status']);
                            })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.all.quote';
        $data['status']         = 0;

        return view('admin.quote.quote', $data);
    }

    public function pending(Request $request)
    {
        $data['quotes'] = Quote::where('status', '0')->when($request['name'], function ($q) use ($request) {
                                return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                            })->when($request['subject'], function ($q) use ($request) {
                                return $q->where('subject', 'LIKE', '%' . $request['subject'] . '%');
                            })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.pending.quote';
        $data['status']         = 1;

        return view('admin.quote.quote', $data);
    }

    public function processing(Request $request)
    {
        $data['quotes'] = Quote::where('status', '1')->when($request['name'], function ($q) use ($request) {
                                return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                            })->when($request['subject'], function ($q) use ($request) {
                                return $q->where('subject', 'LIKE', '%' . $request['subject'] . '%');
                            })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.processing.quote';
        $data['status']         = 1;

        return view('admin.quote.quote', $data);
    }

    public function completed(Request $request)
    {
        $data['quotes'] = Quote::where('status', '2')->when($request['name'], function ($q) use ($request) {
                                return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                            })->when($request['subject'], function ($q) use ($request) {
                                return $q->where('subject', 'LIKE', '%' . $request['subject'] . '%');
                            })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.completed.quote';
        $data['status']         = 1;

        return view('admin.quote.quote', $data);
    }

    public function rejected(Request $request)
    {
        $data['quotes'] = Quote::where('status', '3')->when($request['name'], function ($q) use ($request) {
                                return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                            })->when($request['subject'], function ($q) use ($request) {
                                return $q->where('subject', 'LIKE', '%' . $request['subject'] . '%');
                            })->orderBy('id', 'DESC')->get();

        $data['route_search']   = 'admin.rejected.quote';
        $data['status']         = 1;

        return view('admin.quote.quote', $data);
    }

    public function status(Request $request)
    {
        $quote = Quote::find($request->quote_id);
        $quote->status = $request->status;
        $quote->save();

        
        $notification = array(
            'messege' => 'Status changed successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function details($id){
        $quote = Quote::find($id);
        return view('admin.quote.details', compact('quote'));
    }

    public function delete($id)
    {

        $quote = Quote::findOrFail($id);
        @unlink('assets/front/quote/'.$quote->file);
        $quote->delete();

        $notification = array(
            'messege' => 'Quote Deleted successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }


}
