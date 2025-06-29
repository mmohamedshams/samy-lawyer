<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = DB::table('bookings as b')
            ->leftJoin('users as u', 'b.user_id', '=', 'u.id')
            ->leftJoin('lawyers as l', 'b.lawyer_id', '=', 'l.id')
            ->orderByDesc('b.date')
            ->select('b.*', 'u.name as user_name', 'l.name as lawyer_name')
            ->get();

        return view('admin.bookings.index', compact('bookings'));
    }
}
