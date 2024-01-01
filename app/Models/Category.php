<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "slug", "description", "parent_id", "status", "feature_status", "order", "seo_description", "seo_keywords"];



}
