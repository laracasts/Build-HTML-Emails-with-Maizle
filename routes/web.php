<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/approved', function() {

    $invoices = [
        [
            'id' => 1,
            'vendor' => 'Laracasts',
            'description' => 'Team Plan',
            'invoiceDate' => '2024-04-01',
            'amount' => '$150',
            'approvalDate' => '2024-04-05',
        ],
        [
            'id' => 2,
            'vendor' => 'Beyond Code',
            'description' => 'Laravel Herd Pro',
            'invoiceDate' => '2024-04-01',
            'amount' => '$99',
            'approvalDate' => '2024-04-07',
        ],
        [
            'id' => 3,
            'vendor' => 'The Fake Computer Store',
            'description' => 'Computer for new hire',
            'invoiceDate' => '2024-02-06',
            'amount' => '$3,200',
            'approvalDate' => '2024-04-03',
        ],
    ];

    return response()->json($invoices);
});
