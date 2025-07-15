<?php
namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'ISBN';
    protected $allowedFields = ['ISBN', 'judul', 'penulis', 'penerbit', 'tahun'];
}
