<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nhanvien_id',
        'nhacungcap_id',
        'ngayNhap',

    ];

    public function nhacungcap()
    {
        return $this->belongsTo(NhaCungCap::class, 'nhacungcap_id', 'id')->withTrashed();
    }

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id')->withTrashed();
    
    }
}
