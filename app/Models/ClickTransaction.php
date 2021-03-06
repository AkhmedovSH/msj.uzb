<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClickTransaction extends Model
{
    protected $table = 'transactions_click';
    protected $guarded =[];
    public $timestamps = false;

    public function user(){
      return $this->belongsTo(User::class, 'phone', 'phone');
    }

   const STATUS_CANCEL = -1;
   const STATUS_INACTIVE = 0;
   const STATUS_ACTIVE = 1;
   
}
