<?php

namespace App\Models;

use App\Models\OrderItems;
use App\Models\MenuCategories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Menu extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'menu_name',
        'price',
        'menu_description',
        'menu_image',
        'is_available',
        'menu_category_id',
        'created_at',
        'updated_at',
        'total_sold',
        'best_coffee',
    ];

    protected $table = 'menu';

    public function category()
    {
        return $this->belongsTo(MenuCategories::class, 'menu_category_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'menu_id', 'id');
    }
}
