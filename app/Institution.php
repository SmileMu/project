<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'inst_name', 'found_year', 'type_id', 'section_id',
         'location','phone_no','email'
];
     protected $primaryKey = 'id';
     protected $table = 'institutions';


        public function section()
   {
         return $this->belongsTo('App\Section','foreign_key:section_id', 'id');

   }


    public function type()
    {
        return $this->belongsTo('App\Type','type_id', 'id');

    }

    public function employee ()
    {
        return $this->hasMany('App\Employee','employee_id', 'id');
    }

}
