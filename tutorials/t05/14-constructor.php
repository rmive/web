<?php
    class User {
        public $username;

        function User($param1, $param2) {
            // Constructor statements go here
            $username = "Guest";
        }

        function __construct($param1, $param2) {
            // Constructor statements go here
            $username = "Guest";
        }

        function __destruct() {
            // Destructor code goes here
        }
    }
?>