<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchOffice extends Model
{
    use HasFactory;
    protected $table = 'branch_office';
    protected $guarded = ['id'];

    /**
     * Contoh relasi (jika suatu saat sesi dikaitkan dengan cabang)
     * public function sessions(): HasMany
     * {
     *     return $this->hasMany(Session::class);
     * }
     */
}
