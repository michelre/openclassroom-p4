<?php

require('Comment.php');

function listComments()
{
    $posts = getComments();

    require('listPostsView.php');
}

function post()
{
    $post = getComment($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
}
