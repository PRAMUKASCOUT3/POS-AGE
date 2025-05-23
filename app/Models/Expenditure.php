<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Expenditure extends Model
{
    use HasFactory;
    protected $table = 'expenditures';
    protected $primaryKey = 'id_expenditure';
    protected $fillable = [
        'date',
        'description',
        'nominal'
    ];
    
    /**
     * Get all of the cashiers for the Expenditure
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashiers(): HasMany
    {
        return $this->hasMany(Cashier::class);
    }

    
}
