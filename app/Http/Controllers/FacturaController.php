<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Models\DetalleFactura;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Factura');
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
        
        $lastInvoiceNumber = Factura::latest('id')->first()->id;
        $newInvoiceNumber = $lastInvoiceNumber + 1;
        $factura = new Factura;
        $factura->user_id = auth()->user()->id;
        $factura->invoice_number = $newInvoiceNumber;
        $factura->total_paid = $request->total_paid;
        $factura->purchase_date = now();
        $factura->save();

        
        $productos = $request->input('productos');

        foreach ($productos as $productos) {

            $invoice_id = Factura::latest('id')->first()->id;
            $product_id = $productos['product_id'];
            $quantity = $productos['quantity'];
            $unit_price = $productos['unit_price'];
            $total_price = $productos['subtotal_price'];

            DB::table('detalles_factura')->insert([
                'invoice_id' => $invoice_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'unit_price' => $unit_price,
                'total_price' => $total_price
            ]);

      
        }
        
     

        return(route('home'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
