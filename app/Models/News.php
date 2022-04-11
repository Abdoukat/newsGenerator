<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $fillable = ['num_news','tags_1', 'titre_1', 'image_1', 'description_1', 'lienB_1','tags_2', 'titre_2', 'image_2', 'description_2', 'lienB_2','tags_3', 'titre_3', 'image_3', 'description_3', 'lienB_3','tags_4', 'titre_4', 'image_4', 'description_4', 'lienB_4','tags_5', 'titre_5', 'image_5', 'description_5', 'lienB_5'];
}
