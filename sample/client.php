<?php

include_once('../vendor/autoload.php');

use Snide\Magnum\Client;
use Snide\Magnum\Model\User;
use Snide\Magnum\Model\Project;

$client = new Client();
$user = new User();
$user->setApiToken('YOUR API KEY');
$user = $client->fetchUser($user);

$client = new Client();
$project = new Project();
$project->setApiToken('YOUR API KEY');
$project = $client->fetchProject($project, false);


$client = new Client();
$project->setApiToken('YOUR API KEY');
$project = $client->fetchBuilds($project);
