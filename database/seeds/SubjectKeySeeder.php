<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keys = [
            'đào tạo từ xa',
            'elearning',
            'ICT',
            'công nghệ 4.0'
        ];
        foreach($keys as $key) {
            DB::table('subject_keys')->insert(
                ['subject_key' => $key]
            );
        }
    }
}
