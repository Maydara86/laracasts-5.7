<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectCreated;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'owner_id'];

    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    ];


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


    public function owner()
    {
        return $this->belongsTo(User::class);
    }


    // protected static function boot()
    // {
    //     parent::boot();
    //     static::created(function ($project) {
    //         \Mail::to($project->owner->email)->send(
    //             new \App\Mail\CreatedProjects($project)
    //         );
    //     });
    // }


    public function addTask($description)
    {
        $this->tasks()->create($description);
    }
}
