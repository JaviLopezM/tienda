<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
          [
              'name'    => 'Javier',
              'last_name' => 'López',
              'email'   =>  'info@javierlopez.ml',
              'user'    => 'Javi',
              'password' => bcrypt(123456),
              'role'    => 'admin',
              'active'  =>  1,
              'address' => 'Sant Josep 137 2-1, Sant Carles de la Rapita',
              'locality' => 'Sant Carles de la Ràpita',
              'postal' => 43540,
              'token'   => 'token',
              'verified' => true,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime()

          ],
            [
                'name'    => 'Usuario',
                'last_name' => 'Marinez',
                'email'   =>  'user@mail.com',
                'user'    => 'user',
                'password' => bcrypt(123456),
                'role'    => 'user',
                'active'  =>  1,
                'address' => 'Sant Antoni 16',
                'locality' => 'Amposta',
                'postal' => 43870,
                'verified' => '1',
                'token' => 'token2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()

            ]
        );
        User::insert($data);
    }
}
