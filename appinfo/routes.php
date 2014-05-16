<?php

$this->create('files_git_index', '/')->action(
    function($params){
        require __DIR__ . '/../index.php';
    }
);

