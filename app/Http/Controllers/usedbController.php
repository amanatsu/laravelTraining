<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usedbController extends Controller
{
    //
    public function index(Request $request){
        $msg = "get";
        $param = [];
        $sql = 'select * from people';
        if (isset($request->id))
        {
            $param = ['id' => $request->id];
            $sql = $sql.' where id = :id';
        }
        $sql = $sql."\n"."order by id";
        
        $items = DB::select($sql,$param);

        //こちらでもOK
        if (isset($request->id))
        {
            $items = DB::table('people')
            ->where('id', $request->id)
            ->orderBy('id')
            ->get();
        }
        else
        {
            $items = DB::table('people')->orderBy('id')->get();
        }

        return view('usedb', compact('msg', 'items'));
        
    }

    public function insert(Request $request){

        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age
        ];

        /*$sql = 'insert into people (name, mail, age)';
        $sql = $sql.' values (:name, :mail, :age)';
        DB::insert($sql,$param);*/

        //以下でもOK
        DB::table('people')->insert($param);

        return redirect('usedb');
    }

    public function update(Request $request){
        if (isset($request->id) == false)
        {
            return redirect('usedb');
        }
        $msg = "post";
        $param = [
            'id' => $request["id"],
            'name' => $request["updateName"],
            'mail' => $request["updateMail"],
            'age' => $request["updateAge"]
        ];

        /* $sql = 'update people set name = :name, mail = :mail, age = :age';
        $sql = $sql.' where id = :id';
        DB::update($sql,$param); */

        //以下でもOK
        DB::table('people')->where('id', $request["id"])->update($param);

        return redirect('usedb');
    }
    public function delete(Request $request){
        if (isset($request->id) == false)
        {
            return redirect('usedb');
        }
        $msg = "post";
        /* $param = [
            'id' => $request["id"],
        ];
        $sql = 'delete from people where id = :id'; 
        DB::delete($sql,$param);*/

        //以下でもOK
        DB::table('people')->where('id', $request["id"])->delete();
        return redirect('usedb');
    }
}
