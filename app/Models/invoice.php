<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invoices';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_invoice', 'id_pengguna', 'nama_pengguna', 'id_pesanan', 'nama_produk', 'jumlah_produk'];

    
}
