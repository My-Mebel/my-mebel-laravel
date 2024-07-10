<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class UserController extends Controller
{
    // Render admin/users/users.blade.php page in the Admin Panel    
    public function users()
    {
        // Correcting issues in the Skydash Admin Panel Sidebar using Session
        Session::put('page', 'users');


        $users = User::get()->toArray();
        // dd($users);


        return view('admin.users.users')->with(compact('users'));
    }

    // Update User Status (active/inactive) via AJAX in admin/users/users.blade.php, check admin/js/custom.js    
    public function updateUserStatus(Request $request)
    {
        if ($request->ajax()) { // if the request is coming via an AJAX call
            $data = $request->all(); // Getting the name/value pairs array that are sent from the AJAX request (AJAX call)
            // dd($data);

            if ($data['status'] == 'Active') { // $data['status'] comes from the 'data' object inside the $.ajax() method    // reverse the 'status' from (ative/inactive) 0 to 1 and 1 to 0 (and vice versa)
                $status = 0;
            } else {
                $status = 1;
            }

            User::where('id', $data['user_id'])->update(['status' => $status]); // $data['user_id'] comes from the 'data' object inside the $.ajax() method

            return response()->json([ // JSON Responses: https://laravel.com/docs/9.x/responses#json-responses
                'status'  => $status,
                'user_id' => $data['user_id']
            ]);
        }
    }

    public function deleteUser($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('flash_message_success', 'User has been deleted successfully!');
    }

    public function updateUser(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);

            User::where('id', $id)->update([
                'name'  => $data['name'],
                'mobile' => $data['mobile'],
            ]);

            return redirect()->back()->with('success_message', 'User has been updated successfully!');
        }

        $user = User::where('id', $id)->first();

        return view('admin.users.update_user_details')->with(compact('user'));
    }
}
