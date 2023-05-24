<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Credential extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $guarded = [];

    protected $searchableFields = ['*'];

    public function isReadBy()
    {
        return $this->belongsTo(User::class, 'is_read_by');
    }
}
