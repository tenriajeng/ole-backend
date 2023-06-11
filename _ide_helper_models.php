<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Course
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $slug
 * @property string $status
 * @property string $description
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property int $created_by
 * @property int|null $updated_by
 * @property string $created_by_ip
 * @property string|null $updated_by_ip
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseMaterial> $courseMaterials
 * @property-read int|null $course_materials_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseSection> $courseSections
 * @property-read int|null $course_sections_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CourseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedByIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedByIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Course withoutTrashed()
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CourseMaterial
 *
 * @property int $id
 * @property string $uuid
 * @property int $course_id
 * @property int|null $course_section_id
 * @property string $name
 * @property string $slug
 * @property string $status
 * @property string $description
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property int $created_by
 * @property int|null $updated_by
 * @property string $created_by_ip
 * @property string|null $updated_by_ip
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CourseMaterialFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereCourseSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereCreatedByIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereUpdatedByIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMaterial withoutTrashed()
 */
	class CourseMaterial extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CourseSection
 *
 * @property int $id
 * @property string $uuid
 * @property int $course_id
 * @property string $name
 * @property string $slug
 * @property string $status
 * @property int $created_by
 * @property int|null $updated_by
 * @property string $created_by_ip
 * @property string|null $updated_by_ip
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseMaterial> $courseMaterials
 * @property-read int|null $course_materials_count
 * @method static \Database\Factories\CourseSectionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereCreatedByIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereUpdatedByIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseSection withoutTrashed()
 */
	class CourseSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

