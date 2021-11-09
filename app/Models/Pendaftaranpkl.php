<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranpkl extends Model
{
    use HasFactory;
    protected $table="pendaftaranpkls";
    protected $primaryKey="id";
    protected $fillable=[
        'id','nama','nim','detailanggota1','detailanggota2','detailanggota3','detailanggota4','tempatpkl','tglpkl','telp','file'
    ];
}
