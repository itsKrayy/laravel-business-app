<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;

    public static function offers(){

     /**
     * Summary of all
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

        $features =
        [
            [
                'featureTitle' => 'Products',
                'desc' => 'Browse through Sample / Sound Packs and other libraries essential in Music Production',
                'routing' => '/products'
            ],
            [
                'featureTitle' => 'About',
                'desc' => 'Know more about the Production, Business, and the Goal of this plaform',
                'routing' => '/about'
            ],
            [
                'featureTitle' => 'Contact',
                'desc' => 'Connect with us for queries, business deals, and other concerns',
                'routing' => '/contact'
            ]
        ];
        
        return ($features);
    }
}
