<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Thujohn\Rss\Rss;
use App\Product;
use Illuminate\Support\Facades\URL;

class rssController extends Controller
{
    public function genRss(Rss $rss){
        $feed = $rss->feed('2.0', 'UTF-8');
        $feed->channel([
            'title'       => 'JaviShop',
            'description' => 'Tienda OnLine de Prueba',
            'link'        => URL::to('/'),
        ]);

        $products=Product::all();
        foreach ($products as $product) {

            $feed->item([
                'title' => $product->name,
                'description|cdata' => $product->description,
                'link' => URL::to('/').'product/'.$product->slug,
            ]);
        }

        $feed->save('rss.xml');
    }
    public function rss(Rss $rss ){


        $feed = $rss->feed('2.0', 'UTF-8');
        $feed->channel([
            'title'       => 'JaviShop',
            'description' => 'Tienda OnLine de Prueba',
            'link'        => URL::to('/'),
        ]);

        $products=Product::all();
        foreach ($products as $product) {

            $feed->item([
                'title' => $product->name,
                'description|cdata' => $product->description,
                'link' => URL::to('/').'product/'.$product->slug,
            ]);
        }

        return response($feed, 200)->header('Content-Type', 'text/xml');
    }
}
