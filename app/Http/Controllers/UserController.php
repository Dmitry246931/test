<?php

namespace App\Models;

namespace App\Http\Controllers;

//use Illuminate\Pagination\Paginator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpRequest;
use App\Models\Auto;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        $users = new User();
        $users = $users->get_users();
        $user_count = User::get_user_count();
        if ($user_count == 0) {
            return view('sign');
        } else {
            return view('all_clients_page', compact('users'));
        }
    }

    public function create()
    {
        return view('sign');
    }

    public function store(UserRequest $request)
    {
        $user = User::user_create($request);
        Auto::auto_create($request, $user);

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        $autos = Auto::show_autos($user);
        return view('my_auto', compact('autos'), compact('user'));
    }

    public function edit(User $user)
    {
        return view('sign', compact('user'));
    }

    public function update(UserUpRequest $request, User $user)
    {
        User::up_user($request, $user);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        User::delete_user($user);
        return redirect()->route('users.index');
    }
}
