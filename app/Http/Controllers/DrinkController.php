<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DrinkController extends Controller
{

    public function index(Request $request)
    {
        $lists = Drink::all();
        return view('backend.drink.index',compact('lists'));
    }

    public function create()
    {
        $types = Drink::all();
        return view('backend.drink.create',compact('types'));
    }

    public function store(Request $request)
    {
        $drink = Drink::create([
            'type_id' => $request->type_id,
            'drink_name' => $request->drink_name,
            'cold' => $request->cold,
            'hot' => $request->hot,
            'sort' => $request->sort,
        ]);
        return redirect('backend.drink.index')->with('message','新增成功!');
    }

    public function edit($id)
    {
        $list = Drink::find($id);
        $types = Drink::all();
        return view('backend.drink.edit',compact('list','id','types'));
    }

    public function update(Request $request,$id)
    {
        $Drink = Drink::find($id);
        $Drink -> type_id = $request->type_id;
        $Drink -> drink_name  = $request->drink_name;
        $Drink -> cold  = $request->cold;
        $Drink -> hot  = $request->hot;
        $Drink -> sort  = $request->sort;
        $Drink -> save();

        return redirect('backend.drink.index')->with('message','更新成功!');
    }

    public function delete($id)
    {
        $Drink = Drink::find($id);
        $this->delete_file($Drink->image_ur);
        $Drink->delete();
        return redirect('backend.drink.index')->with('message','刪除成功!');
    }
}
