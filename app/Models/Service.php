<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperService
 */
class Service extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'title',
        'description',
        'contact',
        'cost'
    ];
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
