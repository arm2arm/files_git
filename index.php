<?php

// Look up other security checks in the docs!
\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('files_git');

$username = OC_User::getUser();

#var_dump($username);exit(0);
$tpl = new OCP\Template("files_git", "main", "user");
$tpl->assign('msg', "Hello World $username");
$tpl->printPage();

