<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function newUsers()
    {
        // Calculate the date one month ago
        $lastMonth = Carbon::now()->subMonth();

        // Retrieve the quantity of users registered in the last month
        $userCountLastMonth = User::where('created_at', '>=', $lastMonth)->count();

        // Now, $userCountLastMonth contains the quantity of users registered in the last month
        return response()->json(['newUsers' => $userCountLastMonth]);
    }
}
