<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Horario
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $arrive_time
 * @property string $leave_time
 * @property int $estacion_id
 * @property int $linea_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario whereArriveTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario whereEstacionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario whereLeaveTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario whereLineaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Horario whereUpdatedAt($value)
 */
class Horario extends Model
{
    protected $guarded = [];
    protected $appends = ['Estacion'];

    public function getEstacionAttribute() {
        return Estacion::whereId($this->estacion_id)->first()->name;
    }
}
