<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines=DB::table('medicines')
        ->get();
        return view('medicines.index',['medicines'=>$medicines]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $manufacturers=DB::table('manufacturers')
        ->get();

        return view('medicines.add',['manufacturers'=>$manufacturers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
        ]);

        DB::table('medicines')->insert([
            'name'=>$request->name,
            'category'=>$request->category,
            'description'=>$request->description,
            'price'=>$request->price,
            'manufacturer'=>$request->manufacturer,
        ]);
        return redirect()->route('medicines');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $medicines=DB::table('medicines')
        ->where('id',$id)
        ->get();

        $manufacturers=DB::table('manufacturers')
        ->get();

        return view('medicines.edit',['medicines'=>$medicines,'manufacturers'=>$manufacturers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'name'=>'required|string|max:255',
            'category'=>'required|string|max:255',
        ]);

        $update_query=DB::table('medicines')
        ->where('id',$id)
        ->update([
            'name'=>$request->name,
            'category'=>$request->category,
            'description'=>$request->description,
            'price'=>$request->price,
            'manufacturer'=>$request->manufacturer,
        ]);

        return redirect()->route('medicines');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
    public function delete(Request $request){
        $id=$request->id;

        Medicine::destroy($id);

        return redirect()->route('medicines');
    }


public function file_add(Request $request)
    {
        $id=$request->id;
        
        $medicines = Medicine::find($id);

        return view('medicines.file_add', ['id' => $id , 'medicines' => $medicines]);

    }

    public function process(Request $request)
    {
        $id=$request->id;
        
        $medicines = Medicine::find($id);

        $folder_to_save = $medicines->code;

        $file = $request->file('file');

        $filename = $medicines->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('medicines');

    }
}