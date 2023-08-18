<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostCategory extends Model
{
    use HasFactory;
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {
            $table->integer('post_id');
            $table->integer('category_id');
        });   
    }   
}
