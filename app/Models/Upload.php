<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Upload extends Model
{
    //

    use HasUuids, HasFactory;

    protected $fillable = [
        'id',
        'original_filename',
        'filename',
        'type',
        'uploaded_by',
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    public function uploader()
    {
        return $this->belongsTo(Usersinfo::class, 'uploaded_by');
    }
}
