<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;

    protected $table="detalles_factura";
    protected $fillable = ['invoice_id', 'product_id','quantity', 'unit_price','total_price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }
}
