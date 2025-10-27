<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionDetail extends Model
{
    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class);
    }

    public function item():BelongsTo{
        return $this->belongsTo(Item::class);
    }
}