<?php
class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            Router::redirect('/users/login');
        }
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_posts_add');
        $this->template->title = "Comments";

	$client_files_body = Array("/js/comment.js");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        # Render template
        echo $this->template;

    }

    public function p_add() {

        # Associate this post with this user
        $_POST['user_id'] = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created'] = Time::now();
        $_POST['modified'] = Time::now();
	$_POST['content'] = trim($_POST['content']);

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('posts', $_POST);

        # Quick and dirty feedback
        #echo "Your post has been added. <a href='/posts/add'>Add another</a>";
        Router::redirect("/posts");
    }

    public function index() {
        # Query
           $q = 'SELECT
		posts.post_id,
        	posts.content,
        	posts.created,
		posts.modified,
	        posts.user_id,
        	users.first_name,
	        users.last_name,
                hotels.hotel_name
	   FROM posts
	   INNER JOIN users
        	ON posts.user_id = users.user_id
           INNER JOIN hotels
                ON posts.hotel_id = hotels.hotel_id
           ORDER BY posts.modified DESC';

	# Run the query
	$posts = DB::instance(DB_NAME)->select_rows($q);

        # Set up the View
        $this->template->content = View::instance('v_posts_index');
        $this->template->title = "Posts";

        # Pass data to the View
        $this->template->content->posts = $posts;

            # Render the View
            echo $this->template;

    }

    public function edit($post_id) {
        $this->template->content = View::instance('v_posts_edit');

	$q = "SELECT * FROM posts where post_id = '$post_id'";
        $post = DB::instance(DB_NAME)->select_row($q);

        $this->template->content->post = $post;

        $this->template->title = "Edit Post";

        # Render view
        echo $this->template;

    }

    public function p_edit($post_id) {
	$_POST['modified'] = Time::now();
        $content = trim($_POST['content']);
	$modified = $_POST['modified'];

        $data = Array('content' => $content, 'modified' => $modified);
        #$where_condition = 'WHERE post_id = '.$post_id;
        DB::instance(DB_NAME)->update('posts', $data, "WHERE post_id = '$post_id'");

        Router::redirect('/posts');

    }

    public function delete($post_id) {
        #$where_condition = 'WHERE post_id = ' . $post_id;
	DB::instance(DB_NAME)->delete('posts', "WHERE post_id = '$post_id'");
	#DB::instance(DB_NAME)->delete('posts', $where_condition);
	
	Router::redirect('/posts/');
    }
}
