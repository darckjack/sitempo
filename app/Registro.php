<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Registro
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $arrive_time
 * @property string $leave_time
 * @property int $estacion_id
 * @property int $tren_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro whereArriveTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro whereEstacionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro whereLeaveTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro whereTrenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Registro whereUpdatedAt($value)
 */
class Registro extends Model
{
    protected $guarded = [];
}
