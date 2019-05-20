<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EstacionesLineas
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $linea_id
 * @property int $estacion_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas whereEstacionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas whereLineaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstacionesLineas whereUpdatedAt($value)
 */
class EstacionesLineas extends Model
{
    protected $guarded = [];
}
