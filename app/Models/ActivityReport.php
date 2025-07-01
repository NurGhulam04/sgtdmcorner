<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityReport extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal' => 'date',
    ];

    public function getUmurSaatAktivitasAttribute(): ?int
    {
        // Pastikan relasi user dan tgl_lahir ada untuk menghindari error
        if ($this->user && $this->user->tgl_lahir) {
            return $this->user->tgl_lahir->diffInYears($this->tanggal);
        }

        return null;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
