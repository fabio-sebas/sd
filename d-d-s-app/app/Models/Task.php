<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'due_date', 'completed', 'user_id'];

    public static function rules($id = null)
    {
        return [
            'title' => 'required|max:255',
            'description' => 'nullable',
            'due_date' => 'nullable|date',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCompleted($query)
    {
        return $query->where('completed', true);
    }

    public function getDueDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }

    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date'] = \Carbon\Carbon::createFromFormat('d-m-Y', $value);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($task) {
            // Acciones después de crear una tarea
        });

        static::updated(function ($task) {
            // Acciones después de actualizar una tarea
        });

        static::deleted(function ($task) {
            // Acciones después de eliminar una tarea
        });
    }
}
