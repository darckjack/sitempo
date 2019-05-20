<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EstacionesTrenes
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $estacion_id
 * @property int $tren_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes whereEstacionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes whereTrenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesTrenes whereUpdatedAt($value)
 */
class EstacionesTrenes extends Model
{
    protected $guarded = [];
}
