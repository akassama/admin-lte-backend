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
    Schema::dropIfExists('client_projects');
}


//        __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __ __
//       / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//      / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//     / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//    / // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // /
//   /_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_//_/
//

/* php artisan make:migration create_contract_payments_table */
/* Contract Payments */
DROP TABLE IF EXISTS `contract_payments`;
CREATE TABLE IF NOT EXISTS contract_payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id VARCHAR(255) NOT NULL,
    contract_id VARCHAR(255) NOT NULL,
    client_id VARCHAR(255) NOT NULL,
    project_id VARCHAR(255) DEFAULT NULL,
    payment_amount FLOAT DEFAULT 0.0,
    payment_unit VARCHAR(50)  DEFAULT NULL,
    duration INT DEFAULT 0,
    duration_unit VARCHAR(50)  DEFAULT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    paid_by VARCHAR(255) DEFAULT NULL,
    paid_date DATE DEFAULT NULL,
    paid_bank VARCHAR(255) DEFAULT NULL,
    send_reminder INT DEFAULT 1,
    last_reminder DATE DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT unique_contract_id UNIQUE (contract_id)
)  ENGINE=INNODB;

/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('contract_payments', function (Blueprint $table) {
        $table->increments('id');
        $table->string('contract_id')->unique();
        $table->string('client_id');
        $table->float('payment_ammount')->default(0.0);
        $table->integer('duration')->default(0);
        $table->date('start_date');
        $table->date('end_date');
        $table->integer('paid_status')->default(0);
        $table->integer('reminder_status')->default(0);
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
    Schema::dropIfExists('contract_payments');
}
