/* php artisan make:migration create_users_table */
/* Users */
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) DEFAULT NULL,
    last_name VARCHAR(255) DEFAULT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    status BIT DEFAULT 0,
	auth_token VARCHAR(255) DEFAULT NULL,
    profile_pic VARCHAR(255) DEFAULT NULL,
    bio TEXT DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_user_id UNIQUE (user_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('user_id')->unique();
		$table->string('first_name')->default(null);
		$table->string('last_name')->default(null);
		$table->string('email')->unique();
        $table->string('password');
		$table->boolean('status')->default(0);
        $table->string('profile_pic')->default(null);
        $table->string('bio')->default(null);
		$table->timestamp('email_verified_at')->nullable();
		$table->rememberToken();
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('users');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_blogs_table */
/* Blogs */
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    blog_id VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    abstract VARCHAR(255) DEFAULT NULL,
    categories VARCHAR(255) DEFAULT NULL,
    blog_image VARCHAR(255) NOT NULL,
    image_caption VARCHAR(255) DEFAULT NULL,
    featured_post BIT DEFAULT 0,
    content TEXT NOT NULL,
    tags VARCHAR(255) DEFAULT NULL,
	status BIT DEFAULT 0,
	seo_title VARCHAR(255) DEFAULT NULL,
	seo_description VARCHAR(255) DEFAULT NULL,
	seo_keywords VARCHAR(255) DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_blog_id UNIQUE (blog_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('blogs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('blog_id')->unique();
        $table->string('slug');
        $table->string('title');
        $table->string('author');
        $table->string('abstract')->default(null);
        $table->string('categories')->default(null);
        $table->string('blog_image');
        $table->string('image_caption')->default(null);
        $table->string('featured_post');
        $table->string('content');
        $table->string('tags');
        $table->boolean('status')->default(0);
        $table->string('seo_title');
        $table->string('seo_description');
        $table->string('seo_keywords');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('blogs');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_pages_table */
/* Pages */
DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_id VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    abstract VARCHAR(255) DEFAULT NULL,
    featured_image VARCHAR(255) DEFAULT NULL,
    image_caption VARCHAR(255) DEFAULT NULL,
    content TEXT NOT NULL,
    tags VARCHAR(255) DEFAULT NULL,
	status BIT DEFAULT 0,
	seo_title VARCHAR(255) DEFAULT NULL,
	seo_description VARCHAR(255) DEFAULT NULL,
	seo_keywords VARCHAR(255) DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_page_id UNIQUE (page_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('pages', function (Blueprint $table) {
        $table->increments('id');
        $table->string('page_id')->unique();
        $table->string('slug');
        $table->string('title');
        $table->string('author');
        $table->string('abstract')->default(null);
        $table->string('featured_image')->default(null);
        $table->string('image_caption')->default(null);
        $table->string('content');
        $table->string('tags');
        $table->boolean('status')->default(0);
        $table->string('seo_title');
        $table->string('seo_description');
        $table->string('seo_keywords');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('pages');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_visitors_table */
/* Visitors */
DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS visitors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(255) NOT NULL,
    country VARCHAR(255) DEFAULT NULL,
    browser VARCHAR(255) DEFAULT NULL,
    device VARCHAR(255) DEFAULT NULL,
    url VARCHAR(255) DEFAULT NULL,
    referrer VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('visitors', function (Blueprint $table) {
        $table->increments('id');
        $table->string('ip_address');
        $table->string('country')->default(null);
        $table->string('browser')->default(null);
        $table->string('device')->default(null);
        $table->string('url')->default(null);
        $table->string('referrer')->default(null);
        $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('visitors');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_top_navigation_table */
/* Contract Top Navigation */
DROP TABLE IF EXISTS `top_navigation`;
CREATE TABLE IF NOT EXISTS top_navigation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    navigation_id VARCHAR(255) NOT NULL,
    navigation_name VARCHAR(255) NOT NULL,
    link VARCHAR(255) DEFAULT NULL,
    parent VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_top_navigation_id UNIQUE (navigation_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('top_navigation', function (Blueprint $table) {
        $table->increments('id');
        $table->string('navigation_id')->unique();
        $table->string('navigation_name');
        $table->string('link');
        $table->string('parent')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('top_navigation');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//


/* php artisan make:migration create_footer_navigation_table */
/* Contract Footer Navigation */
DROP TABLE IF EXISTS `footer_navigation`;
CREATE TABLE IF NOT EXISTS footer_navigation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    navigation_id VARCHAR(255) NOT NULL,
    navigation_name VARCHAR(255) NOT NULL,
    link VARCHAR(255) DEFAULT NULL,
    parent VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_footer_navigation_id UNIQUE (navigation_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('footer_navigation', function (Blueprint $table) {
        $table->increments('id');
        $table->string('navigation_id')->unique();
        $table->string('navigation_name');
        $table->string('link');
        $table->string('parent')->default(null);
        $table->integer('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('footer_navigation');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_request_errors_table */
/* Request Errors */
DROP TABLE IF EXISTS `request_errors`;
CREATE TABLE IF NOT EXISTS request_errors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    request_error_id VARCHAR(255) NOT NULL,
    request_ip VARCHAR(255) DEFAULT NULL,
    request_url VARCHAR(255) NOT NULL,
    status_code VARCHAR(255) DEFAULT NULL,
    country VARCHAR(100) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_request_error_id UNIQUE (request_error_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('request_errors', function (Blueprint $table) {
        $table->increments('id');
        $table->string('request_error_id')->unique();
        $table->string('request_ip')->default(null);
        $table->string('request_url')->default(null);
        $table->string('status_code')->default(null);
        $table->string('country')->default(null);
        $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('request_errors');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_activity_logs_table */
/* Request Errors */
DROP TABLE IF EXISTS `activity_logs`;
CREATE TABLE IF NOT EXISTS activity_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    activity_log_id VARCHAR(255) NOT NULL,
    activity_by VARCHAR(255) DEFAULT NULL,
    activity_type VARCHAR(255) DEFAULT NULL,
    activity TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_activity_log_id UNIQUE (activity_log_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('activity_logs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('activity_log_id')->unique();
        $table->string('activity_by')->default(null);
        $table->string('activity_type')->default(null);
        $table->string('activity')->default(null);
        $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('activity_logs');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_categories_table */
/* Request Errors */
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id VARCHAR(255) NOT NULL,
    slug VARCHAR(255) DEFAULT NULL,
    parent VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_category_id UNIQUE (category_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('category_id')->unique();
        $table->string('slug')->default(null);
        $table->string('parent')->default(null);
        $table->integer('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('categories');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_videos_table */
/* Videos Projects */
DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    video_id VARCHAR(255) NOT NULL,
    video_name VARCHAR(255) NOT NULL,
    description VARCHAR(255) DEFAULT NULL,
    video_link VARCHAR(255) NOT NULL,
    tags VARCHAR(255) DEFAULT NULL,
    status BIT DEFAULT 0,
    order INT DEFAULT 10,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_project_id UNIQUE (video_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('videos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('video_id')->unique();
        $table->string('video_name');
        $table->string('description')->default(null);
        $table->string('video_link');
        $table->string('tags')->default(null);
        $table->boolean('status')->default(0);
        $table->string('order')->default(10);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('videos');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_gallery_table */
/* Gallery */
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gallery_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) DEFAULT NULL,
    tags VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_gallery_id UNIQUE (gallery_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('gallery', function (Blueprint $table) {
        $table->increments('id');
        $table->string('gallery_id')->unique();
        $table->string('title');
        $table->string('description')->default(null);
        $table->string('tags')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('gallery');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_documents_table */
/* Documents */
DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS documents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    document_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) DEFAULT NULL,
    document_file VARCHAR(255) NOT NULL,
    tags VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_document_id UNIQUE (document_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('documents', function (Blueprint $table) {
        $table->increments('id');
        $table->string('document_id')->unique();
        $table->string('title');
        $table->string('description')->default(null);
        $table->string('document_file');
        $table->string('tags')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('documents');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_embeds_table */
/* Embeds */
DROP TABLE IF EXISTS `embeds`;
CREATE TABLE IF NOT EXISTS embeds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    embed_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    embed_url VARCHAR(255) NOT NULL,
    shortcode VARCHAR(255) DEFAULT NULL,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_embed_id UNIQUE (embed_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('embeds', function (Blueprint $table) {
        $table->increments('id');
        $table->string('gallery_id')->unique();
        $table->string('title');
        $table->string('embed_url');
        $table->string('shortcode');
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('embeds');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_privacy_policy_table */
/* Gallery */
DROP TABLE IF EXISTS `privacy_policy`;
CREATE TABLE IF NOT EXISTS privacy_policy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    privacy_policy_id VARCHAR(255) NOT NULL,
    privacy_policy TEXT DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_privacy_policy_id UNIQUE (privacy_policy_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('privacy_policy', function (Blueprint $table) {
        $table->increments('id');
        $table->string('privacy_policy_id')->unique();
        $table->string('privacy_policy');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('privacy_policy');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_terms_conditions_table */
/* Terms & Conditions */
DROP TABLE IF EXISTS `terms_conditions`;
CREATE TABLE IF NOT EXISTS terms_conditions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    terms_conditions_id VARCHAR(255) NOT NULL,
    terms_conditions TEXT DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_terms_conditions_id UNIQUE (terms_conditions_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('terms_conditions', function (Blueprint $table) {
        $table->increments('id');
        $table->string('terms_conditions_id')->unique();
        $table->string('terms_conditions');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('terms_conditions');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_slider_table */
/* Slider */
DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slider_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    sub_text VARCHAR(255) DEFAULT NULL,
    image VARCHAR(255) NOT NULL,
    link VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_slider_id UNIQUE (slider_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('slider', function (Blueprint $table) {
        $table->increments('id');
        $table->string('slider_id')->unique();
        $table->string('title');
        $table->string('sub_text')->default(null);
        $table->string('image');
        $table->string('link')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('slider');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_banner_video_table */
/* Banner Video */
DROP TABLE IF EXISTS `banner_video`;
CREATE TABLE IF NOT EXISTS banner_video (
    id INT AUTO_INCREMENT PRIMARY KEY,
    banner_video_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) DEFAULT NULL,
    sub_text VARCHAR(255) DEFAULT NULL,
    video VARCHAR(255) DEFAULT NULL,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_banner_video_id UNIQUE (banner_video_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('banner_video', function (Blueprint $table) {
        $table->increments('id');
        $table->string('banner_video_id')->unique();
        $table->string('title');
        $table->string('sub_text');
        $table->string('video')->default(null);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('banner_video');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_about_us_summary_table */
/* About Us Summary */
DROP TABLE IF EXISTS `about_us_summary`;
CREATE TABLE IF NOT EXISTS about_us_summary (
    id INT AUTO_INCREMENT PRIMARY KEY,
    about_us_summary_id VARCHAR(255) NOT NULL,
    about_us_summary TEXT DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_about_us_summary_id UNIQUE (about_us_summary_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('about_us_summary', function (Blueprint $table) {
        $table->increments('id');
        $table->string('about_us_summary_id')->unique();
        $table->string('about_us_summary')->default(null);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('about_us_summary');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_about_us_video_table */
/* About Us Video */
DROP TABLE IF EXISTS `about_us_video`;
CREATE TABLE IF NOT EXISTS about_us_video (
    id INT AUTO_INCREMENT PRIMARY KEY,
    about_us_video_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) DEFAULT NULL,
    sub_text VARCHAR(255) DEFAULT NULL,
    video VARCHAR(255) DEFAULT NULL,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_about_us_video_id UNIQUE (about_us_video_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('about_us_video', function (Blueprint $table) {
        $table->increments('id');
        $table->string('about_us_video_id')->unique();
        $table->string('title');
        $table->string('sub_text');
        $table->string('video');
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('about_us_video');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_counters_table */
/* Counters */
DROP TABLE IF EXISTS `counters`;
CREATE TABLE IF NOT EXISTS counters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    counters_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    start_count VARCHAR(10) DEFAULT NULL,
    end_count VARCHAR(10) DEFAULT NULL,
    prefix VARCHAR(10) DEFAULT NULL,
    suffix VARCHAR(10) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_counters_id UNIQUE (counters_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('counters', function (Blueprint $table) {
        $table->increments('id');
        $table->string('counters_id')->unique();
        $table->string('title');
        $table->string('start_count')->default(null);
        $table->string('end_count')->default(null);
        $table->string('prefix')->default(null);
        $table->string('suffix')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('counters');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_services_table */
/* Services */
DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    services_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    icon VARCHAR(255) DEFAULT NULL,
    link VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_services_id UNIQUE (services_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('services', function (Blueprint $table) {
        $table->increments('id');
        $table->string('services_id')->unique();
        $table->string('title');
        $table->string('image')->default(null);
        $table->string('icon')->default(null);
        $table->string('link')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('services');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_testimonial_table */
/* Add Testimonial */
DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS testimonial (
    id INT AUTO_INCREMENT PRIMARY KEY,
    testimonial_id VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    organization VARCHAR(255) DEFAULT NULL,
    image VARCHAR(255) DEFAULT NULL,
    testimonial VARCHAR(500) DEFAULT NULL,
    link VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_testimonial_id UNIQUE (testimonial_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('testimonial', function (Blueprint $table) {
        $table->increments('id');
        $table->string('testimonial_id')->unique();
        $table->string('name');
        $table->string('title');
        $table->string('organization')->default(null);
        $table->string('image')->default(null);
        $table->string('testimonial')->default(null);
        $table->string('link')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('testimonial');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_portfolios_table */
/* Portfolios */
DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS portfolios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    portfolio_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_portfolio_id UNIQUE (portfolio_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('portfolios', function (Blueprint $table) {
        $table->increments('id');
        $table->string('portfolios_id')->unique();
        $table->string('title');
        $table->string('description')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('portfolios');
}
//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_team_table */
/* Add Team */
DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS team (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    title VARCHAR(255) DEFAULT NULL,
    image VARCHAR(255) DEFAULT NULL,
    link VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_team_id UNIQUE (team_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('team', function (Blueprint $table) {
        $table->increments('id');
        $table->string('team_id')->unique();
        $table->string('name');
        $table->string('title')->default(null);
        $table->string('image')->default(null);
        $table->string('link')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('team');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_faqs_table */
/* FAQs */
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    faq_id VARCHAR(255) NOT NULL,
    question VARCHAR(255) NOT NULL,
    answer TEXT DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_faq_id UNIQUE (faq_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('faqs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('faqs_id')->unique();
        $table->string('question');
        $table->string('answer')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('faqs');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_partners_table */
/* Partners */
DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS partners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    partners_id VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) DEFAULT NULL,
    logo VARCHAR(255) DEFAULT NULL,
    url VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_partner_id UNIQUE (partner_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('partners', function (Blueprint $table) {
        $table->increments('id');
        $table->string('partners_id')->unique();
        $table->string('name');
        $table->string('description')->default(null);
        $table->string('logo')->default(null);
        $table->string('url')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('partners');
}

//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_sections_table */
/* Sections */
DROP TABLE IF EXISTS `sections`;
CREATE TABLE IF NOT EXISTS sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_section_id UNIQUE (section_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('sections', function (Blueprint $table) {
        $table->increments('id');
        $table->string('sections_id')->unique();
        $table->string('title');
        $table->string('content')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('sections');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_content_data_table */
/* Content Data */
DROP TABLE IF EXISTS `content_data`;
CREATE TABLE IF NOT EXISTS content_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content_data_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    identifier VARCHAR(255) NOT NULL,
    value VARCHAR(255) NOT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_content_data_id UNIQUE (content_data_id),
    CONSTRAINT unique_content_identifier UNIQUE (identifier)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('content_data', function (Blueprint $table) {
        $table->increments('id');
        $table->string('content_data_id')->unique();
        $table->string('title');
        $table->string('identifier')->unique();
        $table->string('value');
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('content_data');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_section_display_table */
/* Section Display */
DROP TABLE IF EXISTS `section_display`;
CREATE TABLE IF NOT EXISTS section_display (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section_display_id VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    identifier VARCHAR(255) NOT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_section_display_id UNIQUE (section_display_id),
    CONSTRAINT unique_section_display_name UNIQUE (name)  
    CONSTRAINT unique_section_display_identifier UNIQUE (identifier)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('section_display', function (Blueprint $table) {
        $table->increments('id');
        $table->string('section_display_id')->unique();
        $table->string('name')->unique();
        $table->string('identifier')->unique();
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('section_display');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_section_order_table */
/* Section Order */
DROP TABLE IF EXISTS `section_order`;
CREATE TABLE IF NOT EXISTS section_order (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section_order_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    identifier VARCHAR(255) NOT NULL,
    order INT DEFAULT 10,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_section_order_id UNIQUE (section_order_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('section_order', function (Blueprint $table) {
        $table->increments('id');
        $table->string('section_order_id')->unique();
        $table->string('title');
        $table->string('identifier')->unique();
        $table->string('order')->default(10);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('section_order');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_gallery_table */
/* Services */
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gallery_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) DEFAULT NULL,
    order INT DEFAULT 10,
    status BIT DEFAULT 0,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_gallery_id UNIQUE (gallery_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('gallery', function (Blueprint $table) {
        $table->increments('id');
        $table->string('gallery_id')->unique();
        $table->string('title');
        $table->string('description')->default(null);
        $table->string('order')->default(10);
        $table->boolean('status')->default(0);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('gallery');
}
