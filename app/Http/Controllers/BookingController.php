<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // عرض نموذج الحجز
    public function showForm()
    {
        $lawyers = DB::table('lawyers')->get();
        $lawyers_json = json_encode($lawyers);

        return view('booking', compact('lawyers_json'));
    }

    // تنفيذ عملية الحجز
    public function submit(Request $request)
    {
        $request->validate([
            'date'      => 'required|date',
            'time'      => 'required',
            'lawyer_id' => 'required|exists:lawyers,id', // ← انتبه هنا كانت غلط
            'case_type' => 'required|string',
            'notes'     => 'nullable|string',
        ]);

        DB::table('bookings')->insert([
            'user_id'   => Auth::id(),
            'lawyer_id' => $request->lawyer_id,
            'date'      => $request->date,
            'time'      => $request->time,
            'case_type' => $request->case_type,
            'notes'     => $request->notes,
            'status'    => 'Pending',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    // عرض حجوزات المستخدم
    public function myBookings()
    {
        $bookings = DB::table('bookings as b')
            ->leftJoin('lawyers as l', 'b.lawyer_id', '=', 'l.id')
            ->where('b.user_id', Auth::id())
            ->orderByDesc('b.date')
            ->select(
                'b.date', 'b.time', 'b.status', 'b.case_type', 'b.admin_note',
                'l.name as lawyer_name'
            )
            ->get();

        return view('my-bookings', compact('bookings'));
    }
}
