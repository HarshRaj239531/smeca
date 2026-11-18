<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inquiry extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'company_name',
        'phone',
        'email',
        'inquiry_type',
        'product_id',
        'product_name',
        'message',
        'status',
    ];

    /**
     * Get the product referenced by this inquiry, if any.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
