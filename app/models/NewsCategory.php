<?php
/**
 * Created by PhpStorm.
 * User: assoft
 * Date: 4.02.15
 * Time: 07:09
 */

class NewsCategory extends Eloquent {

    protected $table = 'news_category';

    protected $fillable = ['title', 'slug', 'images', 'published'];
}