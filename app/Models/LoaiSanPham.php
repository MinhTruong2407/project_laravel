<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenLoaiSanPham',
    ];

    public function sanpham()
    {
        return $this->hasMany(SanPham::class, 'sanpham_id', 'id')->withTrashed();
    }
}
