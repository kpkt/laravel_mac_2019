<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->string('subject');
            $table->text('content');
            $table->string('thumbnail')->nullable();
            $table->integer('is_draft')->unsigned()->default(1);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            // Add Foreign Key
            // foreign('nama fk')->references('field PK')->on('Parent table')
            // Create Foreign Key for `category_id` refer to `id` ON table `categories`
            $table->foreign('category_id')->references('id')->on('categories');
        });

        // Pivot Table
        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();

            // Add foreign Key
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('tag_id')->references('id')->on('tags');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
