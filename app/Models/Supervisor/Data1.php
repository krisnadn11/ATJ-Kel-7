<?php

namespace App\Models\Supervisor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data1 extends Model
{
    use HasFactory;
    protected $table = 'arsys_research_milestone';
    protected $fillable = ['id','milestone','description','phase'];

}
