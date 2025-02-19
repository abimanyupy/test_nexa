<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Orders;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'id',
        'order_id',
        'menu_id',
        'quantity',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    public function orders()
    {
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }
}
