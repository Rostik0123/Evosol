<?php

function encryption($password): string
{
    $hash1 = md5('fcghbjjknkdf');
    $hash2 = md5('adssdpjuehfs169@#$^&*(');

    return md5(sprintf('%s%s%s', $hash1, $password, $hash2));
}