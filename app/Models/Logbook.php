<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $fillable = [ 'date',
                            'product_id',
                            'worker_id',
                            'amount',
                            'storage_id',
                            'cost' ];
    
    public function Worker() {
        return $this->belongsTo(worker::class, "worker_id", "id");
        
    }
    public function Product() {
        return $this->belongsTo(nomenclature::class, "product_id", "id");
        
    }
    public function Storage() {
        return $this->belongsTo(storage::class, "storage_id", "id");
        
    }
}
