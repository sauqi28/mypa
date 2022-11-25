<?php

namespace App\Http\Controllers;

use App\Models\Masteros;
use App\Models\Masteroskind;
use App\Models\Masterosversion;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Postimage;



class MasterOsController extends Controller
{
    //MASTER OS

    public function index()
    {
        //$masteross = DB::table('tb_master_os')->get();
        //return ($masteros);
        //dd($masteross);
        //return view('articles.index');

        return view('admin.masteros.masteros', [
            // 'masteros' => $masteross,
            'masteros' => Masteros::get(),
        ]);
    }

    public function create()
    {
        return view('admin.masteros.create');
    }

    public function store(Request $request)
    {
        # validate
        $request->validate([
            'os' => ['required'],
            // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        //CARA 1 TANPA MODEL
        // DB::table('tb_master_os')->insert([
        //     'type_os' => $request->os,
        //     'avatar' => "-",
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        //CARA 2 DENGAN MODEL
        // $masteros = new Masteros();
        // $masteros->type_os = $request->os;
        // $masteros->avatar = "avatar.jpg";
        // $masteros->save();

        //CARA 3 DENGAN MODEL + REFACTORING
        // Masteros::create([
        //     'type_os' => $request->os,
        //     'avatar' => "avatar.jpg",
        // ]);

        // dd([
        //     'type_os' => $request->os,
        //     'avatar' => "Avatar.jpg",
        // ]);

        // $attributes = $request->validate([
        //     'type_os' => ['required'],
        //     'avatar' => ['required'],


        // ]);

        //dd($attributes);

        Masteros::create([
            'type_os' => $request->os,
            'avatar' => "avatar.jpg",
        ]);

        // Masteros::create($attributes);



        # redirect
        //return redirect()->route('masteros.index');
        return to_route('masteros.index');

        // dd('submitted');
    }

    public function edit($id)
    {
        return view('admin.masteros.edit', [
            //'masteros' => DB::table('tb_master_os')->find($id),
            'masteros' => Masteros::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        // $article = DB::table('tb_master_os')->find($id);
        // dd($article);

        $request->validate([
            'os' => ['required'],
        ]);

        // $masteros = DB::table('tb_master_os')->where('id', $id)->first();
        // DB::table('tb_master_os')->where('id', $id)->update([
        //     'type_os' => $request->os,
        //     // 'updated_at' => now(),
        // ]);

        // $masteros = Masteros::where('id', $id)->first();
        // $masteros->type_os = $request->os;
        // $masteros->save();

        $masteros = Masteros::where('id', $id)->first();
        $masteros->update([
            'type_os' => $request->os,
        ]);

        return redirect()->route('masteros.index');
    }

    public function show($id)
    {
        //$oskind = DB::table('tb_master_os_kind')->where('master_os_id', '=', $id)->get();
        // dd($oskind);

        //VALIDASI KALO ADA / TIDAK ADA

        //CARA 1
        // $Masteroskind = Masteroskind::where('master_os_id', $id)->get();
        // if (is_null($Masteroskind)) {
        //     abort(404);
        // }

        //CARA 2
        $masteroskind = Masteroskind::where('master_os_id', $id)->get();
        abort_if(!$masteroskind, 404);

        return view('admin.masteros.show', [
            //'oskind' => Masteroskind::where('master_os_id', '=', $id)->get()
            'oskind' => Masteroskind::where('master_os_id', $id)->get(),
            'id' => $id
        ]);
    }

    public function destroy($id)
    {
        // DB::table('tb_master_os')->delete($id);
        // return back();
        Masteros::find($id)->delete($id);
        return back();
    }



    //NAMA OS
    public function createosname($id)
    {
        return view('admin.masteros.createosname', [
            'masteros' => Masteros::find($id),
            'id' => $id,
        ]);
    }

    public function storeosname(Request $request, $id)
    {
        # validate
        $request->validate([
            'osname' => ['required'],
        ]);

        Masteroskind::create([
            'master_os_id' => $id,
            'osname' => $request->osname,
            'avatar' => "avatar.jpg"
        ]);


        return to_route('masteros.show', $id);
    }

    public function showosversion($id, $idos)
    {
        //$oskind = DB::table('tb_master_os_kind')->where('master_os_id', '=', $id)->get();
        // dd($oskind);

        //VALIDASI KALO ADA / TIDAK ADA

        //CARA 1
        // $Masteroskind = Masteroskind::where('master_os_id', $id)->get();
        // if (is_null($Masteroskind)) {
        //     abort(404);
        // }

        //CARA 2
        $masterosversion = Masterosversion::where('master_os_kind_id', $idos)->get();
        abort_if(!$masterosversion, 404);

        return view('admin.masteros.showversion', [
            //'oskind' => Masteroskind::where('master_os_id', '=', $id)->get()
            'version' => Masterosversion::where('master_os_kind_id', $idos)->get(),
            'idos' => $idos
        ]);
    }


    public function editosname($id, $idos)
    {
        return view('admin.masteros.editosname', [
            //'masteros' => DB::table('tb_master_os')->find($id),
            'masteros' => Masteros::find($idos),
            'idos' => ($idos),
        ]);
    }

    public function updateosname(Request $request, $id, $idos)
    {
        // $article = DB::table('tb_master_os')->find($id);
        // dd($article);

        $request->validate([
            'os' => ['required'],
        ]);

        // $masteros = DB::table('tb_master_os')->where('id', $id)->first();
        // DB::table('tb_master_os')->where('id', $id)->update([
        //     'type_os' => $request->os,
        //     // 'updated_at' => now(),
        // ]);

        // $masteros = Masteros::where('id', $id)->first();
        // $masteros->type_os = $request->os;
        // $masteros->save();

        $masteros = Masteros::where('id', $id)->first();
        $masteros->update([
            'type_os' => $request->os,
        ]);

        return redirect()->route('masteros.index');
    }
}
