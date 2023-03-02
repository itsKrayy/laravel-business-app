<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    public static function contacts(){
        $contact =
        [
            [
                'contactlabel' => 'Email',
                'contact' => '11krystjurolan@gmail.com'
            ],
            [
                'contactlabel' => 'Contact Number',
                'contact' => '09267438265'
            ],
            [
                'contactlabel' => 'Facebook',
                'contact' => 'Krayy Music'
            ],
            [
                'contactlabel' => 'Twitter',
                'contact' => '@itsKrayy'
            ],
            [
                'contactlabel' => 'Instagram',
                'contact' => '@itsKrayy'
            ],
            [
                'contactlabel' => 'SoundCloud',
                'contact' => '@itsKrayy'
            ],
        ];
        return($contact);
    }
}
