<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            $kuisioner = Kuisioner::all();
        } elseif ($user->role_id == 2) {
            $kuisioner = Kuisioner::where('user_id', $user->id)->get();
        } else {
            $kuisioner = collect();
        }

        return view("dashboard.index", compact('kuisioner'));
    }
}
