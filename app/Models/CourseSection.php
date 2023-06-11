<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CourseSection extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'course_id', 'status'];

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

        static::creating(function ($course_section) {
            $course_section->uuid = Uuid::uuid4();
            $course_section->created_by = Auth::id();
            $course_section->created_by_ip = request()->ip();
        });

        static::updating(function ($course_section) {
            // $course_section->updated_by = Auth::id();
            $course_section->updated_by_ip = request()->ip();
        });
    }
}
