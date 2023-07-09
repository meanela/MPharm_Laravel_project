<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use DB;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 	Ispisati lijekove koji se najčešće kupuju.
        $most_common_medicines = DB::table('medicines')
            ->select('medicines.*', DB::raw('count(*) as brojac'))
            ->groupBy('medicines.id')
            ->join('purchases', 'medicines.id', '=', 'purchases.medicine')
            ->orderByRaw('COUNT(*) DESC')
            ->get();

        // 	Ispisati proizvođače čiji se lijekovi najčešće kupuju.
        $most_common_manufacturers = DB::table('medicines')
            ->select('manufacturers.*', DB::raw('count(*) as brojac'))
            ->groupBy('manufacturers.id')
            ->join('purchases', 'medicines.id', '=', 'purchases.medicine')
            ->join('manufacturers', 'medicines.manufacturer', '=', 'manufacturers.id')
            ->orderByRaw('COUNT(*) DESC')
            ->get();

        // Ispisati broj kupovina odrađenih u periodu od 01.07.2023. do 31.07.2023.
        $from = '2023-07-01 00:00:00';
        $to = '2023-07-31 23:59:59';
        $number_of_purchases = DB::table('purchases')
            ->whereBetween('date', [$from, $to])
            ->count();

        //    Ispisati imena i prezimena kupaca koji su kupili lijek turske proizvodnje u periodu od 01.07.2023. do 31.07.2023.
        $turkish_medicine_buyers = DB::table('customers')
            ->select('customers.name as customer_name')
            ->groupBy('customers.id')
            ->join('purchases', 'customers.id', '=', 'purchases.customer')
            ->join('medicines', 'purchases.medicine', '=', 'medicines.id')
            ->join('manufacturers', 'medicines.manufacturer', '=', 'manufacturers.id')
            ->where('manufacturers.country', 'Turska')
            ->whereBetween('date', [$from, $to])
            ->get();


        //    Ispisati imena kupaca koji su kupili lijekove skuplje od 5KM na recept.    
        $rp_medicines = DB::table('customers')
            ->select('customers.name as customer_name')
            ->groupBy('customers.id')
            ->join('purchases','customers.id','=','purchases.customer')
            ->join('medicines','purchases.medicine','=','medicines.id')
            ->where('medicines.category','Rp')
            ->where('medicines.price','>', 5)
            ->get();


        //    Ispisati imena najčešće kupljenih lijekova bosanske proizvodnje.    
        $most_common_bih_medicines = DB::table('medicines')
            ->select('medicines.*', DB::raw('count(*) as brojac'))
            ->groupBy('medicines.id')
            ->join('purchases', 'medicines.id', '=', 'purchases.medicine')
            ->join('manufacturers', 'medicines.manufacturer', '=', 'manufacturers.id')
            ->where('manufacturers.id','1')
            ->orderByRaw('COUNT(*) DESC')
            ->get();

        //    Ispisati ukupnu količinu kupljenih lijekova bez recepta.
        $number_of_brp_medicines = DB::table('purchases')
            ->join('medicines','medicines.id','=','purchases.medicine')
            ->where('medicines.category', 'BRp')
            ->sum('purchases.amount');

        // Ispisati imena kupaca starijih od 50 koji su kupili više od 3 pakovanja lijeka hrvatskog proizvođača.    
        $older_customers = DB::table('customers')
            ->select('customers.name as customer_name')
            ->groupBy('customers.id')
            ->join('purchases','customers.id','=','purchases.customer')
            ->join('medicines','purchases.medicine','=','medicines.id')
            ->join('manufacturers','medicines.manufacturer','=','manufacturers.id')
            ->where('manufacturers.country','Hrvatska')
            ->where('customers.age','>',50)
            ->where('purchases.amount','>', 3)
            ->get();



        return view('purchases.index', 
            ['most_common_medicines' => $most_common_medicines, 
            'most_common_manufacturers' => $most_common_manufacturers, 
            'number_of_purchases' => $number_of_purchases, 
            'turkish_medicine_buyers' => $turkish_medicine_buyers,
            'rp_medicines' => $rp_medicines,
            'most_common_bih_medicines'=>$most_common_bih_medicines,
            'number_of_brp_medicines'=>$number_of_brp_medicines,
            'older_customers'=>$older_customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}