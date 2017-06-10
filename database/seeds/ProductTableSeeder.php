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
                'name'=>'Camiseta Super Man',
                'slug'=>'camiseta-superman',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'35.00',
                'image'=>'http://www.mxgames.es/3300-tm_large_default/camiseta-superman-logo-clasico.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Camiseta Batman',
                'slug'=>'camiseta-batman',
                'description'=> 'Batman es mejor dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Batman es mejor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'45.00',
                'image'=>'https://www.merchandisingplaza.es/147389/2/Camisetas-Batman-Camiseta-Batman---Distressed-Logo-l.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Camiseta Spiderman',
                'slug'=>'camiseta-spiderman',
                'description'=> 'Spiderman es mejor dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Spiderman es mejor dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'40.70',
                'image'=>'https://ae01.alicdn.com/kf/HTB1PqBGIFXXXXbxXFXXq6xXFXXX1/Spider-man-Logo-Print-T-font-b-shirt-b-font-Men-s-font-b-Black-b.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Figura Darth Vader',
                'slug'=>'fig-darth-vader',
                'description'=> 'Darth es malo ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Darth es malo ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'50.60',
                'image'=>'http://www.kurogami.com/img/productos/figuras/star_wars/figura-star-wars-darth-vader-01.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Figura Spock',
                'slug'=>'figura-spock',
                'description'=> 'Spock dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Spock dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'45,90',
                'image'=>'http://regalos-espaciales.es/images/product/m/merchandising-figuras-y-peluches-star-trek-reaction-figura-s-256px-256px.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Figura Ninja',
                'slug'=>'figura-ninja',
                'description'=> 'Ninja peligroso dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Ninja peligroso dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'70.70',
                'image'=>'https://http2.mlstatic.com/figura-ninja-con-cadena-D_NQ_NP_2734-MLM3492936088_122012-O.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>2
            ],
            [
                'name'=>'Camisetas Breaking Bad',
                'slug'=>'slider-breaking',
                'description'=> 'Breaking Bad sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'BB sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'70.70',
                'image'=>'https://ae01.alicdn.com/kf/HTB1MhvnIVXXXXb.XXXXq6xXFXXXA/Fresco-con-estilo-Heisenberg-camiseta-del-estilo-del-verano-Breaking-Bad-camisetas-para-hombre-insignia-para.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
                'name'=>'Camisetas Ant Man',
                'slug'=>'camisetas-sh',
                'description'=> 'Camisetas Ant Man, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
                'extract'=>'Camisetas Ant Man, consectetur adipisicing elit. Eligendi non quis exercitationem',
                'price'=>'70.70',
                'image'=>'http://mm3.vistoenpantalla.com/imagenes-productos/camiseta-ant-man-mod1-large2.jpg',
                'visible'=>1,
                'created_at'=>new DateTime(),
                'updated_at'=>new DateTime(),
                'category_id'=>1
            ],
            [
            'name'=>'Juego de Tronos',
            'slug'=>'game-thrones',
            'description'=> 'Juego de Tronossit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas',
            'extract'=>'Juego de Tronossit amet, consectetur adipisicing elit. Eligendi non quis exercitationem',
            'price'=>'70.70',
            'image'=>'https://www.camisetasdejuegodetronos.com/wp-content/uploads/2013/11/juego_tronos_casa_stark.jpg',
            'visible'=>1,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            'category_id'=>1
            ]);
        Product::insert($data);

    }

}
