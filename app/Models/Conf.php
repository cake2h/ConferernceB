<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Conf extends Model
{
    use HasFactory;

    protected $table = 'konfs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
        'date_start',
        'date_end',
        'deadline',
        'description',
    ];

    public function sections() : HasMany
    {
        return $this->hasMany(Section::class, 'konf_id');
    }

    public function conferenceDates(): HasOne
    {
        return $this->hasOne(Conf::class, 'id');
    }
}
