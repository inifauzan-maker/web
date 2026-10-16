<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['program_id', 'name', 'phone', 'email', 'school', 'grade', 'city', 'location', 'notes', 'status', 'admin_notes'])]
class Registration extends Model
{
    use HasFactory;

    public const STATUSES = ['baru' => 'Baru', 'dihubungi' => 'Dihubungi', 'terdaftar' => 'Terdaftar', 'dibatalkan' => 'Dibatalkan'];

    public const LOCATIONS = ['Bandung', 'Jakarta Selatan', 'Jakarta Pusat', 'Online'];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
