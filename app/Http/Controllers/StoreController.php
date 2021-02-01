<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $section=[

            (object)[
                
                'titre1'=> 'Come On In',
                'titre2'=> 'We\'re Open',
                'adresse1' => '1116 Orchard Street',
                'adresse2' => 'Golden Valley, Minnesota',
                'tel1'=> 'Call Anytime',
                'tel2'=> '(317) 585-8468',
            ],

            (object)[
                
                'sunday' => 'closed',
                'Monday' => '7:00 AM to 8:00 PM',
                'Tuesday' => '7:00 AM to 8:00 PM',
                'Wednesday' => '7:00 AM to 8:00 PM',
                'Thrusday' => '7:00 AM to 8:00 PM',
                'Friday' => '7:00 AM to 8:00 PM',
                'Saturday' => '7:00 AM to 5:00 PM',

            ],

        ];


        $pipi=[

            (object)[

                'image'=>'img/about.jpg',
                'titre1'=>'Strong Coffee, Strong Roots',
                'titre2'=>'About Our Cafe',
                'textA'=>'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers ',
                'textB'=>'in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.',
                'textC'=>'We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. ',
                'textD'=>'Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.'
            ],

        ];

        return view('pages/store', compact('section','pipi'));
    }
}
