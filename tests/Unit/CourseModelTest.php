<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Course;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CourseModelTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function course_model_exists()
    {
        $course = new Course();
        $this->assertInstanceOf(Course::class, $course);
    }

    /** @test */
    public function course_mass_assign()
    {
        $title = 'A course title';
        $description = 'A course description';
        $isActive = false;
        $start_date = date('Y-M-D h:i:s');
        $image = '/tmp/tmp.png';

        $course = new Course([
            'title' => $title,
            'image' => $image,
            'description' => $description,
            'start_date' => $start_date,
            'active' => $isActive,
        ]);

        $course->save();

        $this->assertTrue($course->title == $title);
        $this->assertTrue($course->description == $description);
        $this->assertTrue($course->image == $image);
        $this->assertTrue($course->start_date == $start_date);
        $this->assertTrue($course->active == $isActive);
    }
}
