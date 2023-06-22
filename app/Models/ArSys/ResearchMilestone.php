<?php

namespace App\Models\arsys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchMilestone extends Model
{
    use HasFactory;
    protected $fillable = ['id','milestone','milestone_model','propose_button','phase','sequence','status','description'];
    protected $table = 'arsys_research_milestone';
}
