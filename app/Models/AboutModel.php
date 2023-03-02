<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;

    public static function contents(){
        $content = 
        [
            [
                'title' => 'About the Website',
                'desc' => 'Krayy Sounds is a e-commerce website that sells high quality sound and sample packs for all-around music production.
                This platform also aims to help Artist and Producers to be creative in their crafts and open more opportunities for creativity.'
            ],
            [
                'title' => 'About the Founder',
                'desc' => 'Krayy or Kryst Jurolan is a amaetur Music Producer and Sound Designer who explores more on creating different sounds for Electronic Music.
                His passion on Electronic Music or the EDM genre enabled wider scopes for Music Production, making the products more versatile to any Music Production.'
            ]
        ];

        return($content);
    }
}
