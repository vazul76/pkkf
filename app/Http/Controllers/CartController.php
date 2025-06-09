<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // app/Http/Controllers/CartController.php

public function index()
{
    // Your cart index logic here
    return view('cart'); // Example return
}
}
