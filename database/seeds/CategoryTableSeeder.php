<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
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
                'name'=>'Cómic Marvel',
                'slug'=>'comic-marvel',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'color'=>'#4402'

            ],
            [
                'name'=>'Cómic DC',
                'slug'=>'comic-dc',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'color'=>'#445500'
            ]);
        Category::insert($data);

    }
}
