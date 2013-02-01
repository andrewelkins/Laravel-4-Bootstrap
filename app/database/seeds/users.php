<?php

$dt = new DateTime('now');
$now = $dt->format('Y-m-d H:i:s');

return array(
    'email'      => 'test@test.com',
    'password'   => Hash::make('test'),
    'first_name' => 'John',
    'last_name'  => 'Doe',
    'created_at' => $now,
    'updated_at' => $now
);