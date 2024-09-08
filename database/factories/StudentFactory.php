<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Menghasilkan student_id dalam format STD0001, STD0002, dan seterusnya
        static $studentCounter = 1;
        $studentId = 'STD' . str_pad($studentCounter++, 4, '0', STR_PAD_LEFT);

        // Nama depan acak
        $firstName = $this->faker->firstName;

        // Grade acak, hanya antara Kindergarten 1 dan Kindergarten 2
        $grade = $this->faker->randomElement(['Kindergarten 1', 'Kindergarten 2']);

        // Slug format: nama depan - id (id akan didapat setelah insert, jadi generate slug setelah create)
        return [
            'name' => $firstName . ' ' . $this->faker->lastName,
            'slug' => '',  // Slug akan diupdate setelah instance disimpan
            'student_id' => $studentId,
            'age' => $this->faker->numberBetween(4, 6), // Umur anak-anak untuk Kindergarten
            'grade' => $grade,
            'class' => 'Class ' . $this->faker->randomDigitNotNull,
            'parent' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'special_note' => $this->faker->sentence,
            'status' => true, // Status default true
        ];
    }

    /**
     * After creating a model instance, update the slug field.
     *
     * @param \App\Models\Student $student
     * @return void
     */
    
}
