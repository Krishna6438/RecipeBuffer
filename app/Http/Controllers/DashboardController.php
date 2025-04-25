<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ Add this line
use App\Models\Recipe;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $recipes = Recipe::where('user_id', $user->id)->latest()->paginate(5);

        return view('dashboard', compact('user', 'recipes'));
    }
}
