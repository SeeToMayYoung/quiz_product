<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $product = [
            ['id' => '1', 'name' => 'LUXE KNIFE','desc' => 'An elegantly designed knife built with the finest damascus steel and finished with a hint of sapphire to make it more classy.', 'rarity' => 'R', 'price' => '1550','img' => 'knife_luxe.webp'],
            ['id' => '2', 'name' => 'PRIME CLASSIC','desc' => 'A classic pistol that has been modified with a shiny rod magazine and topped with a purple-gold finishing to make you look richer.', 'rarity' => 'SR', 'price' => '1775', 'img' => 'classic_prime.jpg'],
            ['id' => '3', 'name' => 'SENSATION JUDGE','desc' => 'Using shotgun is gay. Rainbow is gay. Why not combine both?', 'rarity' => 'R', 'price' => '875','img' => 'judge_sensation.jpg'],
            ['id' => '4', 'name' => 'SPECTRUM PHANTOM','desc' => 'The sounds this gun makes will follow you even in your deepest sleep. Dunununun DUnununNUN!', 'rarity' => 'SSR', 'price' => '2675','img' => 'phantom_spectrum.jpg'],
            ['id' => '5', 'name' => 'REAVER OPERATOR','desc' => 'This operator magazine is loaded with the poor souls that had perished during the battle against the mighty witch, Reyna.', 'rarity' => 'SR', 'price' => '1775','img' => 'operator_reaver.jpg']
        ];
        return view('productlist')->with('product',$product);
    }
    public function detail($id){
        $newItem = [];
        $item = [
            ['id' => '1', 'name' => 'LUXE KNIFE','desc' => 'An elegantly designed knife built with the finest damascus steel and finished with a hint of sapphire to make it more classy.', 'rarity' => 'R', 'price' => '1550','img' => 'knife_luxe.webp'],
            ['id' => '2', 'name' => 'PRIME CLASSIC','desc' => 'A classic pistol that has been modified with a shiny rod magazine and topped with a purple-gold finishing to make you look richer.', 'rarity' => 'SR', 'price' => '1775', 'img' => 'classic_prime.jpg'],
            ['id' => '3', 'name' => 'SENSATION JUDGE','desc' => 'Using shotgun is gay. Rainbow is gay. Why not combine both?', 'rarity' => 'R', 'price' => '875','img' => 'judge_sensation.jpg'],
            ['id' => '4', 'name' => 'SPECTRUM PHANTOM','desc' => 'The sounds this gun makes will follow you even in your deepest sleep. Dunununun DUnununNUN!', 'rarity' => 'SSR', 'price' => '2675','img' => 'phantom_spectrum.jpg'],
            ['id' => '5', 'name' => 'REAVER OPERATOR','desc' => 'This operator magazine is loaded with the poor souls that had perished during the battle against the mighty witch, Reyna.', 'rarity' => 'SR', 'price' => '1775','img' => 'operator_reaver.jpg']
        ];
        foreach($item as $i){
            if($i['id'] === $id){
                $newItem = $i;
            }
        }
        return view('detail')->with('item',$newItem);
    }
}
