<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    //protected $table = 'projects';
    //protected $connection = 'projects_connection';

    protected $fillable = [
      'project', 'client', 'client_url', 'client_thumb', 'client_feature'
  ];

}
