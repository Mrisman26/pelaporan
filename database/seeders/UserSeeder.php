<?php

namespace Database\Seeders;

use App\Models\tbuser;
use App\Models\Tbuser as ModelsTbuser;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //
    ([
        [
        $user = new User(),
        $user->name = "Risman",
        $user->email = "superadmin@mail.com",
        $user->password = bcrypt('12345678'),
        $user->level = 'SUPERADMIN',
        $user->notlp = '089506093804',
        $user->foto = 'RxHQV6yIZIoUUWv0JUYK5DDkCAZL6FXYZ6SEou1J.png',
        $user->save(),
        ],
        [
        $user = new User(),
        $user->name = "Aden",
        $user->email = "admin@mail.com",
        $user->password = bcrypt('12345678'),
        $user->level = 'ADMIN',
        $user->notlp = '089506093805',
        $user->foto = 'fmVDwI0uOOWMGxxS686G3skbuQPx8EX2zWOYbDyW.png',
        $user->save(),
        ],
        [
        $user = new User(),
        $user->name = "Jini",
        $user->email = "teknisi@mail.com",
        $user->password = bcrypt('12345678'),
        $user->level = 'TEKNISI',
        $user->notlp = '089506093801',
        $user->foto = 'Ylm8TZ8qD37VlCp8MWhB561TJuXMl80trXNmn0rN.jpg',
        $user->save(),
        ],
    ]);

}
}
