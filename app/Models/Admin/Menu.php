<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'menu_id';
    protected $table = 'menu';
    protected $fillable =['nombre','url','icono'];
    protected $guarded =['id'];
 
}
