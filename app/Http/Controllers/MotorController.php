<?php

namespace App\Http\Controllers;

class MotorController extends Controller
{
    public function index()
    {
        $motors = [
            [
                'nama' => 'Honda CBR150R',
                'harga' => '38.000.000'
            ],
            [
                'nama' => 'Yamaha R15',
                'harga' => '40.000.000'
            ],
            [
                'nama' => 'Kawasaki Ninja ZX-25R',
                'harga' => '105.000.000'
            ]
        ];

        return view('motor.index', compact('motors'));
    }
}