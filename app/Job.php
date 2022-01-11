<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_name',
];
protected $primaryKey = 'id';
protected $table = 'jobs';

}
