<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tren
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $model
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $direction
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tren whereUpdatedAt($value)
 */
class Tren extends Model
{
    protected $guarded = [];
}
