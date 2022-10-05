<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'users_id',
        'hoTen',
        'email',
        'soDienThoai',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id')->withTrashed();
    }
    
}
