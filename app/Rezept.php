<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Rezept extends Model
{
    //
    use Sortable;

    public $sortable = ['name','time','added'];
    protected $fillable = ['name','time', 'time', 'persons', 'z1', 'z2', 'z3', 'z4', 'z5', 'z6', 'z7', 'z8', 'z9', 'z10', 'z11', 'z12', 'z13', 'z14', 'z15', 'z16', 'z17', 'z18', 'z19', 'z20', 'z21', 'pic', 'added', 'editor', 'tumb', 'notes', 'directions', 'category'];
}
