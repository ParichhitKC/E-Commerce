<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'detail','category_id','file','price'
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    } public function File()
    {
        return $this->belongsTo(File::class);
    }

}
