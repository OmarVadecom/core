<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quote;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {

        $data['quotes'] = Quote::when($request['subject'], function ($q) use ($request) {
                            return $q->where('subject', 'LIKE', '%' . $request['subject'] . '%');
                        })->orderBy('id', 'DESC')->limit(10)->get();

        $data['services'] = Service::orderBy('id', 'DESC')->get();

        $data['portfolios'] = Portfolio::when($request['title'], function ($q) use ($request) {
                                return $q->where('title', 'LIKE', '%' . $request['title'] . '%');
                            })->when($request['service_id'], function ($q) use ($request) {
                                return $q->where('service_id', $request['service_id']);
                            })->orderBy('id', 'DESC')->limit(10)->get();

        return view('admin.dashboard', $data);
    }
}
