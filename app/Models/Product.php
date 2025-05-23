<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id_product'; // Primary key
    public $incrementing = true; // Auto-increment
    protected $keyType = 'int'; // Tipe data primary key

    protected $fillable = [
        'id_category',
        'code',
        'name',
        'price',
        'brand',
        'stock',
        'price_buy',
        'price_sell',
        'unit',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category'); // Pastikan foreign key benar
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Generate kode barang otomatis
            $model->code = Product::generateKodeBarang();
        });
    }

    public static function generateKodeBarang()
    {
        // Ambil kode barang terakhir dari database dan extract nomor
        $lastKode = Product::max('code');
        $lastNumber = $lastKode ? intval(substr($lastKode, 2)) : 0; // Ambil angka setelah 'BR'

        // Tambahkan 1 ke nomor terakhir
        $newNumber = $lastNumber + 1;

        // Format angka baru menjadi 4 digit, misalnya '0001'
        $newKode = 'BR' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);

        return $newKode;
    }

    public function cashiers():HasMany
    {
        return $this->hasMany(Cashier::class, 'product_id', 'id');
    }

    
}
