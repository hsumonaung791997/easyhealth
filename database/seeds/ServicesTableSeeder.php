<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'id' => 1,
                'title' => 'Private GP Service',
                'description' => 'In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final copy is available, but it may also be used to temporarily replace copy in a process called greeking, which allows designers to consider form without the meaning of the text influencing the design.',
                'media_id' => null,
                'status' => 1,
                'parent' => null,
                'type' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:m:i'),
                'updated_at' => Carbon::now()->format('Y-m-d H:m:i'),
            ],
            [
                'id' => 1,
                'title' => 'Private GP Service',
                'description' => 'In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final copy is available, but it may also be used to temporarily replace copy in a process called greeking, which allows designers to consider form without the meaning of the text influencing the design.',
                'media_id' => null,
                'status' => 1,
                'parent' => null,
                'type' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:m:i'),
                'updated_at' => Carbon::now()->format('Y-m-d H:m:i'),
            ],
            [
                'id' => 1,
                'title' => 'Private GP Service',
                'description' => 'In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used before final copy is available, but it may also be used to temporarily replace copy in a process called greeking, which allows designers to consider form without the meaning of the text influencing the design.',
                'media_id' => null,
                'status' => 1,
                'parent' => null,
                'type' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:m:i'),
                'updated_at' => Carbon::now()->format('Y-m-d H:m:i'),
            ],
        ];
    }
}
