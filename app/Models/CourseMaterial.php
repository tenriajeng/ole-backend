<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CourseMaterial extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'course_id', 'course_section_id', 'status', 'description'];

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

        static::creating(function ($course_material) {
            $course_material->uuid = Uuid::uuid4();
            $course_material->created_by = Auth::id();
            $course_material->created_by_ip = request()->ip();
        });

        static::updating(function ($course_material) {
            // $course_material->updated_by = Auth::id();
            $course_material->updated_by_ip = request()->ip();
        });
    }
}
