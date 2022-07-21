<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalRemark extends Model
{
    use HasFactory;
    
      protected $fillable = [
        'document_link',
        'lead_id',
        'document_type',
        'user_id',
        'remarks_by_legal',
    ];

}
