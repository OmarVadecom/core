<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class FrontUserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when($request['name'], function ($q) use ($request) {
                    return $q->where('name', 'LIKE', '%' . $request['name'] . '%');
                })->when($request['email'], function ($q) use ($request) {
                    return $q->where('email', 'LIKE', '%' . $request['email'] . '%');
                })->when(($request['status'] === '0' || $request['status'] === 'Yes'), function ($q) use ($request) {
                    return $q->where('email_verified', $request['status']);
                })->orderBy('id', 'DESC')->get();

        return view('admin.fuser.index', compact('users'));
    }

    public function status_update(Request $request){

        $user = User::findOrFail($request->user_id);

        $user->email_verified = $request->email_status;
        $user->save();

        $notification = array(
            'messege' => 'Email Status Successfully',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }


    public function delete($id){

        $user = User::findOrFail($id);

        $orders = Order::where('user_id', $id)->get();

        foreach($orders as $order){
            $order->delete();
        }

        

        @unlink('assets/front/img/'. $user->image);
        $user->delete();

        $notification = array(
            'messege' => 'User Deleted Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with('notification', $notification);

    }

    public function details($id){
        $user = User::findOrFail($id);
        return view('admin.fuser.details', compact('user'));
    }
}
