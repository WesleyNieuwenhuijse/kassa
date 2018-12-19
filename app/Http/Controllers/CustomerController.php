<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = DB::table('customers')
            ->join('invoices','customers.invoice_id','=','invoices.id')
            ->select('customers.*','invoices.paid')->get();
//        $invoice = Invoice::all();
        return view('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //maak een rekening aan als klant gelijk rekening opent op naam
        $invoice = new Invoice;
        $invoice->paid = false;
        $invoice->save();

        //maak klant aan en voeg gelijk de rekening toe
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->invoice_id = $invoice->id;
        $customer->save();

        //redirect terug naar de index pagina
        return redirect()->action('CustomerController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer1)
    {
        $customer = DB::table('customers')
            ->join('invoices','customers.invoice_id','=','invoices.id')
            ->where('customers.id','=',$customer1->id)
            ->select('customers.*','invoices.paid')->get();
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
//        $customer = DB::table('customers')
//            ->join('invoices','customers.invoice_id','=','invoices.id')
//            ->where('customers.id','=',$customer1->id)
//            ->select('customers.*','invoices.paid')->get();
        return view('customer.update',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        DB::table('customers')
            ->where('id', '=', $customer->id )
            ->update(['name' => $request->name]);
        DB::table('invoices')
            ->where('id', '=', $customer->invoice_id)
            ->update(['paid' => $request->paid]);

        return redirect()->action('CustomerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Invoice::destroy("$customer->id");
        $customer->delete();
        return redirect()->action('CustomerController@index');
    }
}
