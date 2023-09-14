<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::all();
        return view("admin.pages.users.index",compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view("admin.pages.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("admin.pages.users.edit",compact("user"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $inputs = $request->all();
        $inputs['password'] = Hash::make($inputs['password']);
        $result = $user->update($inputs);
        if($result == true)
        {
            return to_route('admin.user.index')->with('errors', 'کاربر شما با موفقیت ویرایش شد');
        }
        else
        {
            return to_route('admin.user.index')->with('errors', 'کاربر شما با موفقیت ویرایش نشد');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $result = $user->delete();
        return redirect()->route('admin.user.index');
    }
    public function change(User $user){
        if($user['permission'] == 0)
        {
            $user['permission'] = 1;
            $user->save();
            return to_route('admin.user.index');
        }
        elseif($user['permission'] == 1){
            $user['permission'] = 0;
            $user->save();
            return to_route('admin.user.index');
        }
    }
}
