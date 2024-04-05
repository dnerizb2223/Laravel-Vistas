<?php 
namespace App\Moduls;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Modul extends Model
{
    use HasFactory;

    protected $table ='moduls';
    // protected $primarykey = 'id';
    // protected $incrementing = true;
    protected $timestamps = false;

    public function cursos()
    {
        return $this->belongsToMany(Curs::class, 'moduls_has-cursos', 'moduls_id', 'cursos_id')->withPivot('curs_academic_id');
    }
}

?>