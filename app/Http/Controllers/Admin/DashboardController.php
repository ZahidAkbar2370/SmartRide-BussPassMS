<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalCategories = Category::count();
        $totalPasses = Pass::count();
        $todayCreatedPasses = Pass::whereDate("created_at", Carbon::today())->count();

        return view('Admin.Dashboard.dashboard', compact('totalCategories', 'totalPasses', 'todayCreatedPasses'));
    }
}
