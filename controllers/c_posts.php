<?php
class posts_controller extends base_controller {

    public function __construct() {
	parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("You need to be logged in to access posts. <a href='/users/login'>Login</a>");
        }
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_posts_add');
        $this->template->title   = "Comments";

        # Render template
        echo $this->template;

    }

    public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('posts', $_POST);

        # Quick and dirty feedback
        #echo "Your post has been added. <a href='/posts/add'>Add another</a>";
	Router::redirect("/users/profile");
    }

    public function index() {
	# Query
    	$q = 'SELECT 
            	posts.content,
            	posts.created,
            	posts.user_id,
            	users.first_name,
            	users.last_name,
		hotels.hotel_name
            FROM posts
            INNER JOIN users 
            	ON posts.user_id = users.user_id
	    INNER JOIN hotels
		ON posts.hotel_id = hotels.hotel_id
	    ORDER BY posts.created DESC';

    	# Run the query
    	$posts = DB::instance(DB_NAME)->select_rows($q);

	# Set up the View
        $this->template->content = View::instance('v_posts_index');
        $this->template->title   = "Posts";

	# Pass data to the View
        $this->template->content->posts = $posts;

    	# Render the View
    	echo $this->template;

    }
}
