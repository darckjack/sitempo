<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Linea
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Linea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Linea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Linea query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Linea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Linea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Linea whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Linea whereUpdatedAt($value)
 */
class Linea extends Model
{
    protected $guarded = [];
}
