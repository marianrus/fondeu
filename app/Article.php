<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $primaryKey = 'article_id';

    protected $table = 'articles';

    protected $fillable = [
        'article_name',
        'article_description',
        'category_id',
        'article_on_site',
        'article_on_facebook',
        'created_by'
    ];
}
