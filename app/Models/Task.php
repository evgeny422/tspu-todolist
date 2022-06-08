<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = [
        'name',
        'project_id',
        'description',
        'date_start',
        'date_end',
        'is_active',
    ];

    public function scopePlayer($query)
    {
        return $query->whereHas('executor', function (Builder $query) {
            $query->where('user_id', auth()->id());
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', '=', 1);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function executor()
    {
        return $this->belongsToMany(User::class, 'user_task' );
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class, 'task_label',);
    }
}
