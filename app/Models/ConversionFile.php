<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConversionFile extends Model
{
  use HasFactory;

  protected $table = 'conversion_files';

  protected $fillable = [
    'conversion_id',
    'status',
    'file_id',
    'converted_format',
    'converted_path',
    'size',
    'status',
    'error_message'
  ];
}
