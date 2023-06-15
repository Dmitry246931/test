<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Requests\AutoUpRequest;
use App\Http\Requests\AutoRequest;
use App\Http\Requests\UserRequest;
use App\Models\Auto;
use App\Models\User;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function create(User $user)
    {
        return view('auto_new', compact('user'));
    }

    public function edit(auto $auto)
    {
        return view('auto_new', compact('auto'));
    }

    public function update(AutoUpRequest $request, auto $auto)
    {
        Auto::up_auto($request, $auto);
        return redirect()->route('users.index');
    }

    public function store(AutoRequest $request, User $user)
    {
        $autos = new Auto();
        $autos::auto_create($request, $user);
        $autos = Auto::au_where_us($user);
        return view('my_auto', compact('autos'), compact('user'));
    }

    public function destroy($auto)
    {
        $count_auto = Auto::get_auto_count($auto);
        if ($count_auto == 1) {
            $user = User::get_users_auto($auto);
            return redirect()->route('users.show', compact('user'));
        } else {
            Auto::delete_auto($auto);
            return redirect()->route('users.index');
        }
    }
}
