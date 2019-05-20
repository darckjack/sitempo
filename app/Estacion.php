<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Estacion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $direction
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estacion whereUpdatedAt($value)
 */
class Estacion extends Model
{
    protected $guarded = [];
}
