<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Cicle extends Model
{
    use HasFactory;

    protected $table ='cicles';
    // protected $primarykey = 'id';
    // protected $incrementing = true;
    protected $timestamps = false;

    public function cursos()
    {
        return $this->hasMany(Curs::class, 'cicle_id');
    }
}

?>