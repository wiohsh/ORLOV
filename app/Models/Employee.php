<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [ 'naming',
                            'name',
                            'post',
                            'gender_id',
                            'salary',
                            'surname',
                            'patronymic' ];
    
    public function Gender() {
        return $this->belongsTo(gender::class, "gender_id", "id");
        
    }
}
