<?php
/**
 * Created by PhpStorm.
 * User: assoft
 * Date: 4.02.15
 * Time: 07:06
 */

class News extends Eloquent{

    protected $table = 'news';

    protected $fillable = ['title', 'slug', 'body', 'images', 'published', 'published_date', 'count', 'metadata', 'tags', 'user_id'];

}