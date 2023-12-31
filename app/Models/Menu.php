<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Category;

class Menu extends Model
{
    use HasFactory;

    protected $fillable =['name','price','description','image' ];

    function categories():BelongsToMany{

        return $this->belongsToMany(Category::class,'category_menu');
    }
}
