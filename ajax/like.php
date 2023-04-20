<?php
    require_once("../bootstrap.php");
    if( !empty($_POST) ) {
        $postId = $_POST['id'];
        $userId = 1;

        $l = new Like();
        $l->setPostId($postId);
        $l->setUserId($userId);
        $l->save();

        $p = new Post();
        $p->id = $postId;
        $likes = $p->getLikes();

        $result = [
            "status" => "success",
            "message" => "Like was saved",
            "likes" => $likes
        ];

        echo json_encode($result);

    }