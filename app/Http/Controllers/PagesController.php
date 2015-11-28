<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {

        $first = 'Stefan';
        $last = 'Starkbaum';

        $people = [
            'Taylor Otwell',
            'Dayle Rees',
            'Eric Barnes'
        ];

        return view('pages.about', compact('first', 'last', 'people'));
    }

    public function contact() {
        return view('pages.contact');
    }
}
