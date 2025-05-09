<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;



class Faq extends Model
{
    use HasFactory, SoftDeletes;
    public $table = 'faqs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    protected $fillable = [
        'question',
        'answer',
        'created_at',
        'updated_at',
        'deleted_at',
        
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'faq_product');
    }
}
