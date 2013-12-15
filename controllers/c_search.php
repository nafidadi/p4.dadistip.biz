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
                /*
                $client_files_head = Array("");
                $this->template->client_files_head = Utils::load_client_files($client_files);
                
                $client_files_body = Array("");
                $this->template->client_files_body = Utils::load_client_files($client_files_body);   
                */

		/*echo '<pre>';
			print_r($_POST);
		echo '</pre>';*/

		$find = $_POST['find'];
		$city = $_POST['city'];
		$where_condition = "WHERE ( hotel_name LIKE '%$find%' OR neighborhood LIKE '%$find%' ) AND city = $city";
		if($find != '') {
			$q = "SELECT * FROM hotels " .$where_condition;

			$hotelinfo = DB::instance(DB_NAME)->select_rows($q);
			$this->template->contentBottom->hotelinfo = $hotelinfo;
		} 
                # Render the view
                        echo $this->template;

        } # End of method

	public function p_search() {
		/*
		$this->template->content = View::instance('v_search_results');
                $q = "SELECT *
                     FROM hotels
                     WHERE hotel_name LIKE '%$_POST%'";

                $hotelinfo = DB::instance(DB_NAME)->select_rows($q);
                $this->template->content->hotelinfo = $hotelinfo;

		echo $this->template;
		*/
	}
} # End of class
