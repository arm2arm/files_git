<?php

// Look up other security checks in the docs!
\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('files_git');

$tpl = new OCP\Template("files_git", "main", "user");
$tpl->assign('msg', 'Hello World');
$tpl->printPage();

