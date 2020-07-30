<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'Jean-Kenel Dessources',
            'Nixon Henry',
            'Anderson Richez',
        ];
        
        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }
}
