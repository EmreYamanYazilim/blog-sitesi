<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "category_id",
        "image",
        "name",
        "slug",
        "body",
        "tags",
        "status",
        "seo_description",
        "seo_keywords",
        "read_time",
        "like_count",
        "view_count",
        "publish_date"
    ];
}
