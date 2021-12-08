<?php 

require_once __DIR__ . '/../src/config/config.php';
require_once __DIR__ . '/../src/models/User.php';

$user = new User(['name' => 'Lucas', 'email' => 'lucas@email.com']);
echo $user->getSelect(['name' => 'Chaves', 'email' => 'email@mail.com'], 'id, name');