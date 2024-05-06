<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;

class ApiController extends Controller
{
    public function createProduct(Request $request){
    
        $request->validate([
            'title' => 'required|max:256|string',
            'description'=>'required|max:255|string',
            'image_url' => 'required|max:255|string',
        ]);
        Recipe::create([
            'title'=>$request->title,
            'description' => $request->description,
            'image_url' => $request->image_url,
        ]);

        return response()->json([
            'message' => 'Recipe saved',
        ]);
    }

    public function getProducts(){
        $userId = auth()->user()->user_id;
        User::find($userId);
        $products = Recipe::get();
        return response()->json([
                'message' => 'All Recipes',
                'data' => $products,
            ]);
    }

    
    public function getProductDetails($id){
        $userId = auth()->user()->user_id;
        User::find($userId);
        $product = Recipe::findOrFail($id);
        return response()->json([
            'message' => 'Recipe details',
            'data' => $product,
        ]);
    }
    public function updateProductDetails(Request $request,$id){
        $userId = auth()->user()->user_id;
        User::find($userId);
        Recipe::findOrFail($id)->update([
            'title'=>$request->title,
            'description' => $request->description,
            'image_url' => $request->image_url,
        ]);

        return response()->json([
            'message' => 'Recipe details updated',
        ]);
    }
    public function deleteProductDetails($id){
        $userId = auth()->user()->user_id;
        User::find($userId);
        $product = Recipe::find($id);
        $product->delete();
        return response()->json([
            'message' => 'Recipe deleted',
        ]);
    }
}
