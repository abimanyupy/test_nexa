<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuCategories extends Model
{
    // use SoftDeletes;

    protected $table = 'menu_categories';

    protected $fillable = ['category_name', 'category_description'];

    public function menu()
    {
        return $this->hasMany(Menu::class, 'menu_category_id', 'id');
    }
}
