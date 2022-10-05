<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietPhieuNhap extends Model
{
    use HasFactory,
    SoftDeletes;

    protected $fillable = [
        'phieunhap_id',
        'sanpham_id',
        'soLuong',
        'donGia',
    ];

    public function sanpham()
    {
        return $this->belongsTo(SanPham::class, 'sanpham_id', 'id')->withTrashed();
    }

    public function phieunhap()
    {
        return $this->belongsTo(PhieuNhap::class, 'phieunhap_id', 'id')->withTrashed();
    }
}
