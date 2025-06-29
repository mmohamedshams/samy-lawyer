<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LawyerController extends Controller
{
    public function index()
    {
        $lawyers = DB::table('lawyers')->get();

        return view('admin.lawyers.index', compact('lawyers'));
    }
}
