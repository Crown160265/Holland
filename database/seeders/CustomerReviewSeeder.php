<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerReview;

class CustomerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerReview::create([
            'description' => "It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. 
                            I don't think I have ever eaten a better cake. 
                            I will be back again.",
            'avatar' => '7.jpg',
            'name' => 'Esther Howard',
            'position' => 'New York'
        ]);
        CustomerReview::create([
            'description' => "It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. 
                            I don't think I have ever eaten a better cake. 
                            I will be back again.",
            'avatar' => '4.jpg',
            'name' => 'Elanor Pera',
            'position' => 'Paris'
        ]);
        CustomerReview::create([
            'description' => "It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. 
                            I don't think I have ever eaten a better cake. 
                            I will be back again.",
            'avatar' => '6.jpg',
            'name' => 'Krishna Barbe',
            'position' => 'Amsterdam'
        ]);
        CustomerReview::create([
            'description' => "It's amazing, the cakes here are so special that it's hard to describe, it's worth a try. 
                            I don't think I have ever eaten a better cake. 
                            I will be back again.",
            'avatar' => '1.jpg',
            'name' => 'Esther Pera',
            'position' => 'Tokyo'
        ]);
    }
}
