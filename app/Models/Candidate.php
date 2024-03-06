<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'candid_id',
        'name',
        'election_id',
    ];
    public function election()
    {
        return $this->belongsTo(Election::class, 'election_id');
    }
}