<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Course extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function courseSections()
    {
        return $this->hasMany(CourseSection::class);
    }

    public function courseMaterials()
    {
        return $this->hasMany(CourseMaterial::class);
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->uuid = Uuid::uuid4();
            $course->created_by =  Auth::id();
            $course->created_by_ip = request()->ip();
        });

        static::updating(function ($course) {
            // $course->updated_by = Auth::id();
            $course->updated_by_ip = request()->ip();
        });
    }
}
