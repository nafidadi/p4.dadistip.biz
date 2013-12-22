<?php
class search_controller extends base_controller {

        /*-------------------------------------------------------------------------------------------------

        -------------------------------------------------------------------------------------------------*/
        public function __construct() {
                parent::__construct();
        }

        /*-------------------------------------------------------------------------------------------------
        Accessed via http://localhost/index/index/
        -------------------------------------------------------------------------------------------------*/
        public function index() {

                # Any method that loads a view will commonly start with this
                # First, set the content of the template with a view file
                        $this->template->contentTop = View::instance('v_search_index');
			$this->template->contentBottom = View::instance('v_search_results');
                # Now set the <title> tag
                        $this->template->title = "Nashville Area Hotels";
		
                # CSS/JS includes
                
                /*$client_files_head = Array('/css/search_hotel.css');
                $this->template->client_files_head = Utils::load_client_files($client_files);*/
                
                $client_files_body = Array("/js/search.js", "/js/comment.js");
                $this->template->client_files_body = Utils::load_client_files($client_files_body);   
                

		$find = $_POST['find'];
		$keys = explode(" ", $find);
		$city = $_POST['city'];
		/*$where_condition = "WHERE hotel_name LIKE '%$find%' AND city = $city";*/
		$where_condition = "WHERE city = $city ";
		foreach($keys AS $key) {
			if($key == 'hotel' || $key == 'inn' || $key == 'suites') {
				continue;
			}
			else {
				$where_condition .= "AND hotel_name LIKE '%$key%'";
			}
		}
		
		if($find != '') {
			$q = "SELECT hotels .*, posts.content, posts.created, posts.modified, users.nick_name
			      FROM hotels
			      LEFT JOIN posts
				ON hotels.hotel_id = posts.hotel_id
			      LEFT JOIN users
				ON posts.user_id = users.user_id " .$where_condition;

			$hotelinfo = DB::instance(DB_NAME)->select_rows($q);
			$this->template->contentBottom->hotelinfo = $hotelinfo;
		} 
                # Render the view
                        echo $this->template;

        } # End of method

} # End of class
