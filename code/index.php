<?php

$dateTime = new DateTime();

echo sprintf(
    'Current date time: %s',
    $dateTime->format('Y-m-d H-i-s')
);