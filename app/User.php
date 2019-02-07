<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable as Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name", "email", "password", "avatar"
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "remember_token",
    ];

    public function avatar()
    {
        if ($this->avatar != null) {
            return Auth::user()->avatar;
        }
        return url("/images/no_image.png");
    }

    /**
     * Get the comments for the blog post.
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|null
     */
    public function categoryOf(string $type)
    {
        if ($type == "question") {
            return $this->questions();
        } elseif ($type == "test") {
            return $this->tests();
        }
        return null;
    }

    /**
     * Get the comments for the blog post.
     */
    public function questions()
    {
        return $this->hasMany("App\Question", "user_id");
    }

    /**
     * Get the comments for the blog post.
     */
    public function tests()
    {
        return $this->hasMany("App\Test", "user_id");
    }

    /**
     * Get the comments for the blog post.
     */
    public function questionCategories()
    {
        return $this->hasMany("App\QuestionCategory", "user_id");
    }

    /**
     * Get the comments for the blog post.
     */
    public function testCategories()
    {
        return $this->hasMany("App\TestCategory", "user_id");
    }
}
