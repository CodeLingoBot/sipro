<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends BaseModel {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'questions';

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'description', 'categorie_id', 'user_id', 'soft_delete', 'lines', 'image_id', 'type',
	];

    public function scopeWithoutCategorie($query)
    {
        return $query->where('categorie_id', null);
    }

    public function scopeFromCategory($query, $questionCategory = null)
    {
        if (isset($questionCategory) && isset($questionCategory->id)){
            return $query->where('categorie_id', $questionCategory->id);
        } else {
            return $query->where('categorie_id', null);
        }
    }


    /**
     * Get the comments for the blog post.
     */
    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }

    public function thumbImage(){
        try{
            return $this->image()->first()->imageb64_thumb;
        } catch (\Exception $e){
            return null;
        }

    }

    /**
     * Get the comments for the blog post.
     */
    public function options()
    {
        return $this->hasMany('App\Option');
    }

}
