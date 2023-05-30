<?php

$heading = 'Home';

//*****including the databse class */
require ('./Database.php');

//*****including configurations */
$config = require('./config.php');

//*****initiating new db class and it configurations */
$db = new Database($config['database']);

//*****fetching the data from the posts database */
// $id = $_GET['id'];

$query = "SELECT * FROM post";

$posts = $db->query($query,[])->fetchAll();

require_once './views/index.view.php';


