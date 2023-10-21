<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Products as Pro;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Post;

class ProductController extends Controller
{
    public function index(){
        $pro=Pro::paginate(10);
        return view("products.index",compact('pro'));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nombre_product'=> 'required|string|max:20',
            'description'=> 'required|string|min:10|max:20',
            'price'=> 'required|numeric|min:0',
            'stock'=> 'required|numeric|min:0'
        ]);


        

    $pro = Pro::create([
    'name'=> $request->name,
    'description'=> $request->description,
    'price'=> $request->price,
    'stock' => $request->stock,

    ]);


        $pro = new Products();
        $pro ->name = $request->name;
        $pro ->description =$request->description;
        $pro ->price =$request->price;
        $pro ->stock = $request->stock;
        $pro-> save();
        return redirect()->route('products.create');

    }
    public function postfind(){

        $post = Post::find(1);
        dump($post);
        //dd($post->comments);

        $comments = Comment::where('post_id',1)->get();
        dd($comments);

    }
    public function update(request $request,$id)
    {

        $prod = Pro::find($id);
        $prod2 = Pro::where('id',$id)->get();

        $prod->name =$request->name;
        $prod->description =$request->description;
        $prod->price =$request->price;
        $prod->stock =$request->stock;
        $prod->save();

        return $this->index();

    }


}
