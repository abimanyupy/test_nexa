<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\MenuCategories;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function bestCoffee()
    {
        $bestCoffee = Menu::where('best_coffee', true)->get();

        $categoriesCoffee = MenuCategories::get();

        $newCoffee = Menu::orderBy('created_at', 'desc')->paginate(5);

        $bestSelling = Menu::orderBy('total_sold', 'desc')->paginate(5);

        $blogs = Blogs::orderBy('created_at', 'desc')->paginate(3);

        return view('main/main', [
            'bestCoffee' => $bestCoffee,
            'categoriesCoffee' => $categoriesCoffee,
            'newCoffee' => $newCoffee,
            'bestSelling' => $bestSelling,
            'blogs' => $blogs,
        ]);
    }

    // public function newCoffee()
    // {
    //     $menus = Menu::with('category')
    //     ->where('is_available', 1)
    //     ->orderBy('menu_name', 'asc')
    //     ->get();;

    //     return view('dashboard/menu',  compact('menus'));
    // }

    // public function bestSelling()
    // {
    //     $menus = Menu::with('category')
    //     ->where('is_available', 1)
    //     ->orderBy('menu_name', 'asc')
    //     ->get();;

    //     return view('dashboard/menu',  compact('menus'));
    // }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu_name' => "required|max:50|string|unique:menu,menu_name",
            'menu_description' => 'nullable|max:255',
            'price' => 'required|numeric',
            'menu_image' => 'nullable|image|max:2048|mimes:jpg,jpeg,png',
            'is_available' => 'required|boolean',
            'menu_category_id' => 'required|exists:menu_categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $author = Author::create($request->all());
        return response()
            ->json(['message' => 'Pengarang baru berhasil ditambahkan!', 'data' => $author]);
    }


    public function show(Menu $menu)
    {
        //
    }


    public function edit(Menu $menu)
    {
        //
    }


    public function update(Request $request, Menu $menu)
    {
        //
    }
    public function destroy(Menu $menu)
    {
        //
    }
}
