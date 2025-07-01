<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodSugarReport extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'hasil_gula_darah',
        'tanggal_pemeriksaan',
        'jam_pemeriksaan',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_pemeriksaan' => 'date',
    ];

    public function getUmurSaatGulaDarahAttribute(): ?int
    {
        // Pastikan relasi user dan tgl_lahir ada untuk menghindari error
        if ($this->user && $this->user->tgl_lahir) {
            return $this->user->tgl_lahir->diffInYears($this->tanggal_pemeriksaan);
        }

        return null;
    }

    /**
     * Mendefinisikan relasi ke model User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
