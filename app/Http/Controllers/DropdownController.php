<?php

namespace App\Models;

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    public function index()
    {
        $users = User::get_users();
        $auto = Auto::on_parking();
        $user_count = User::get_user_count();
        if ($user_count == 0) {
            return view('sign');
        } else {
            return view('parking', compact('users'), compact('auto'));
        }
    }

    public function data(Request $request)
    {
        if ($request->has('cat_id')) {
            if ($request->has('cat_id')) {
                $parentId = $request->get('cat_id');
                $data = Auto::off_parking($parentId);
                return $data;
            }
        }
    }

    public function auto(Request $request)
    {
        $users = User::get_users();
        Auto::status_on($request);
        $auto = Auto::on_parking();
        return view('parking', compact('users'), compact('auto'));
    }

    public function auto_out(auto $avt)
    {
        $users = User::get_users();
        Auto::status_off($avt);
        $auto = Auto::on_parking();
        return view('parking', compact('users'), compact('auto'));
    }
}
