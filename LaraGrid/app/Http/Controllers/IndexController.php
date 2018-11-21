<?php

namespace App\Http\Controllers;

use App\DataGrid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function Data(Request $request)
    {
        $name = $request->get('sort');

        function GetQuery($request){
            if ($request == null || $request == 'NO'){
                return DataGrid::all();
            }
        elseif ($request == 'ITEM'){
            return $pages = DB::table('DataGrid')->orderByRaw('item')->select('name','item','amount','id')->get();
        }elseif ($request == 'AMOUND'){
            return $pages = DB::table('DataGrid')->orderByRaw('amount')->select('name','item','amount','id')->get();
        }elseif ($request == 'CUSTOMER') {
            return $pages = DB::table('DataGrid')->orderByRaw('name')->select('name', 'item', 'amount','id')->get();
        }}

        $query = GetQuery($name);
        return view('welcome', [
            'page' => $query
        ]);

    }}