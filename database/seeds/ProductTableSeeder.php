<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
                'name'=>'Comic SpiderMan',
                'slug'=>'comic-spiderman',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'5.00',
                'image'=>'https://static.comicvine.com/uploads/scale_small/0/4/51585-9142-68478-1-peter-parker-spider.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Comic Hulk',
                'slug'=>'comic-hulk',
                'description'=> 'Hulk es mejor dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Hulk es mejor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'4.90',
                'image'=>'http://d1466nnw0ex81e.cloudfront.net/n_iv/600/949433.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Comic Thor',
                'slug'=>'comic-thor',
                'description'=> 'Thor ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Thor malo ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'5.60',
                'image'=>'https://i1.wp.com/static3.comicvine.com/uploads/scale_large/11/110017/2765866-thor_001.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Comic Green Arrow',
                'slug'=>'green-arrow',
                'description'=> 'Arrow dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Spock dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'3,90',
                'image'=>'http://www.espaciodc.com/wp-content/uploads/2014/02/green_arrow_maquina_matar_ecc.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Comic Suerman',
                'slug'=>'comic-superman',
                'description'=> 'Superman peligroso dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Ninja peligroso dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'3.70',
                'image'=>'http://ifanboy.com/wp-content/uploads/2012/03/Superman-Secret-Origin-2010.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Comic Batman',
                'slug'=>'batman-silencio',
                'description'=> 'Breaking Bad sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'BB sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'5.70',
                'image'=>'https://www.ecccomics.com/content/productos/2386/BatmanSilencioParte1.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Comic Dare Devil',
                'slug'=>'comic-dare-devil',
                'description'=> 'Camisetas Ant Man, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Camisetas Ant Man, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'70.70',
                'image'=>'https://4.bp.blogspot.com/-SlP5Az6_9n4/V3PJ79zd-fI/AAAAAAAA8Vg/NH4BU67NSscvScF8Gq20T3Y1mK1iMb3twCLcB/s1600/Daredevil%2Bv5%2B%2523%2B6%2B%25280%2529.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Comic IronMan',
                'slug'=>'comic-ironman',
                'description'=> 'Iron man sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Iron mansit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'10.70',
                'image'=>'http://vignette1.wikia.nocookie.net/marveldatabase/images/1/10/The_Invincible_Iron_Man.jpg/revision/latest?cb=20110724151825',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Comic Constantine',
                'slug'=>'constantine',
                'description'=> 'John Constantine  sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Iron mansit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'3.70',
                'image'=>'http://www.zonanegativa.com/imagenes/2013/03/Constantine-1-renato-guedes.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Comic The Flash',
                'slug'=>'comic-flash',
                'description'=> 'The Flash sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Iron mansit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'2.70',
                'image'=>'http://1.bp.blogspot.com/-WcelIl5RlI4/VScwuoZNGLI/AAAAAAAABZI/20OrOhcHiLU/s1600/Flash_Vol_3_1A.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Comic Aquaman',
                'slug'=>'comic-aquaman',
                'description'=> 'Iron man sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Iron mansit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'10.70',
                'image'=>'https://www.ecccomics.com/content/productos/88/aquaman1.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Comic Lobezno',
                'slug'=>'comic-lobezno',
                'description'=> 'Lobezno es mejor dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Lobezno es mejor dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'6,90',
                'image'=>'http://farm3.static.flickr.com/2288/2452829644_bf5ac02bf1.jpg?v=0',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ]);
        Product::insert($data);

    }

}
