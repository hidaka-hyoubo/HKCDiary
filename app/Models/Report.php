<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    
    protected $fillable = ['report_date','report_title','report_content'];
    
     /**
     * このReportを所有するユーザー。（ Userモデルとの関係を多対１と定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    
}
