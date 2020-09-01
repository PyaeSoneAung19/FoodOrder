<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Category;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('backend.menu.list', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        $categories = Category::all();
        return view('backend.menu.new', compact('restaurants', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codeno = mt_rand(1000,9999);
        $name = $request->name;
        $photo = $request->photo;
        $price = $request->price;
        $description = $request->description;
        $restaurant_id = $request->restaurant_id;
        $category_id = $request->category_id;

        $imgName = time().'.'.$photo->extension();

        $photo->move(public_path('images/menu'),$imgName);

        $filepath = 'images/menu/'.$imgName;

        $menu = new Menu;
        $menu->codeno = $codeno;
        $menu->name = $name;
        $menu->photo = $filepath;
        $menu->price = $price;
        $menu->description = $description;
        $menu->restaurant_id = $restaurant_id;
        $menu->category_id = $category_id;
        $menu->save();

        return redirect()->route('menu.index');

        // dd($name, $photo, $price, $description, $restaurant_id, $category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $restaurants = Restaurant::all();
        $categories = Category::all();

        return view('backend.menu.edit', compact('menu', 'restaurants', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
