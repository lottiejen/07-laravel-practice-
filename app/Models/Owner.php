<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    public function fullName()
    {
       return "{$this->first_name} {$this->last_name}"; // using string interpolate to add a fullName method
    }

    public function fullAddress()
    {   
    return "{$this->address_1} {$this->address_2}
    {$this->town} {$this->postocode}";
     // using string interpolate to add a fullAddress method
    }

}


// In 'artisan tinker' 
// exit out if you get an error msg - EG.BadMethodCallException

// $owner=Owner::find(5); - Finding a specfic owner 
// $owner->fullName(); - Method to get name

// $ownerAddress=owner::find(2);
// $ownerAddress->fullAddress();