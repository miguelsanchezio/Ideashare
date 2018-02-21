<?php
    class Pages extends Controller {
        public function __construct() {
            
        }

        public function index() {
            if(isLoggedIn()) {
                redirect('posts');
            }
            
            $data = [
                'title' => 'SharePosts',
                'description' => 'Social network built on the PHP MVC framework.'
            ];

            $this->view('pages/index', $data);
        }

        public function about() {
            $data = [
                'title' => 'About us',
                'description' => 'Share posts with other users.'
            ];

            $this->view('pages/about', $data);
        }
    }
?>