<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOwner()
    {
        return view('Owner', [
            'message' => Owner::getOwnerName()
        ]);
    }
}