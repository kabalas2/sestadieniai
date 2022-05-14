<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function relationships()
    {
        return $this->hasMany(Relationship::class,'group_id','id');

    }

    public function project()
    {
        return $this->hasOne(Project::class, 'id','project_id');
    }


}
