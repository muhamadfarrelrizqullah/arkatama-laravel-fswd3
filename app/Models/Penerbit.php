<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'penerbit';

    protected $fillable = [
        'nama_penerbit',
        'alamat',
        'no_telepon',
    ];

    public function buku() 
    {
        return $this->hasMany(Buku::class, 'id_penerbit', 'id'); 
    }


}
