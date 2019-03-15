<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class StudentTeacher extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "students_teachers";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "email",
        "teacher_id",
        "confirmed",
    ];

    /**
     * Return HasOne if teacher isset
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne("App\User", "id", "teacher_id");
    }

    /**
     * Return HasOne if student isset.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne("App\User", "email", "email");
    }

    /**
     * Scope function to get confirmed users
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeConfirmed(Builder $query)
    {
        return $query->where("confirmed", true);
    }

    /**
     * Scope function to get confirmed users
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeFromTeacher(Builder $query, User $teacher)
    {
        return $query->where("teacher_id", $teacher->id);
    }
}
