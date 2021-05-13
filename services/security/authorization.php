<?php

function isAuthorization(): bool
{
    return !empty($_SESSION['user']);
}
