<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laralum\Blog\Models\Category;

class CreateLaralumBlogCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('laralum_blog_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Category::create([
            'name' => 'Uncategorized',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('laralum_blog_categories');
    }
}
