<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Свидетельство о гос. регистрации',
                'image' => 'images/docs/certificate_of_state_registration.jpg',
                'doc' => 'docs/certificate_of_state_registration.pdf',
                'active' => 1,
            ],
            [
                'name' => 'Выписка из ЕГРЮЛ',
                'image' => 'images/docs/extract_from_the_USRLE.jpg',
                'doc' => 'docs/extract_from_the_USRLE.pdf',
                'active' => 0,
            ],
            [
                'name' => 'Положение СХЛ',
                'image' => 'images/docs/SHL_position.jpg',
                'doc' => 'docs/SHL_position.pdf',
                'active' => 1,
            ],
        ];

        foreach ($data as $user) {
            Document::query()->create($user);
        }
    }
}
