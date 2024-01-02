<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        "logo_image",
        "home_slider_image",
        "adverse_image",
        "footer_text",
        "most_popular_status",
        "recent_article_status",
        "search_status",
        "home_pages_slider_text_1",
        "home_pages_slider_text_2",
        "home_pages_slider_text_3",
    ];

}
