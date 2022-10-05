<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'loaisanpham_id',
        'tenSanPham',
        'hinhAnh',
    ];

    public function chitietphieunhap()
    {
        return $this->hasMany(ChiTietPhieuNhap::class, 'sanpham_id', 'id')->withTrashed();
    }

    public function loaisanpham()
    {
        return $this->belongsTo(LoaiSanPham::class, 'loaisanpham_id', 'id')->withTrashed();
    }

    public function chitiethoadon()
    {
        return $this->hasMany(ChiTietHoaDon::class, 'sanpham_id', 'id')->withTrashed();
    }

    public function chitietthuoctinh()
    {
        return $this->hasMany(ChiTietThuocTinh::class, 'sanpham_id', 'id')->withTrashed();
    }

    public function chitietdondathang()
    {
        return $this->hasMany(ChiTietDonDatHang::class, 'sanpham_id', 'id')->withTrashed();
    }

    public function chitietkhuyenmai()
    {
        return $this->hasMany(ChiTietKhuyenMai::class, 'sanpham_id', 'id')->withTrashed();
    }

}
