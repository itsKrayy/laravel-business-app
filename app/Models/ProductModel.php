<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';
    // public static function products(){
    //     $product = 
    //     [
    //         [
    //             'productTitle' => 'KrayyEssentials',
    //             'desc' => 'Basic Drums loops, oneshots, FXs, and vocals for Music Production',
    //         ],
    //         [
    //             'productTitle' => 'Sounds of KSHMR Vol. 5',
    //             'desc' => 'Fundamental Sounds from the Sounds of KSHMR series. Complete Edition',
    //         ],
    //         [
    //             'productTitle' => 'Cymatics Future House Essentials',
    //             'desc' => 'Sounds and Samples for House Music genre. Consist of House Kick, Snares, Fills, and FXs.',
    //         ],
    //         [
    //             'productTitle' => 'Dharma Orchestral Essentials',
    //             'desc' => 'Fundamental instruments and sounds for Orchestra Production',
    //         ],
    //         [
    //             'productTitle' => 'Cymatics Trap Essentials',
    //             'desc' => 'Sounds and Samples for Trap Music genre. Consist of House Kick, Snares, Fills, and FXs.',
    //         ]
    //     ];

    //     return($product);
    // }
}
