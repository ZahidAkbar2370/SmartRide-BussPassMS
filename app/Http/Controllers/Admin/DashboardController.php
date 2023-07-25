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
        $endDate = Carbon::now();
        $startDate = Carbon::now()->subDays(7);

        $totalCategories = Category::count();
        $totalPasses = Pass::count();
        $todayCreatedPasses = Pass::whereDate("created_at", Carbon::today())->count();
        $pastSevenDaysCreatedPasses = Pass::whereBetween('created_at', [$startDate, $endDate])->count();

        return view('Admin.Dashboard.dashboard', compact('totalCategories', 'totalPasses', 'todayCreatedPasses', 'pastSevenDaysCreatedPasses'));
    }
}
