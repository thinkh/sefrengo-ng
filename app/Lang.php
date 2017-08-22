<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    
    /**
     * Get user record for the creator.
     */
     public function created_from()
     {
         return $this->hasOne('App\User');
     }

     /**
      * Get user record for the last update.
      */
      public function updated_from()
      {
          return $this->hasOne('App\User');
      }
}
