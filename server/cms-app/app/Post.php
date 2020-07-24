<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function up() 
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
    }
    
    protected $guarded = ['id', 'created_at'];
    
}
