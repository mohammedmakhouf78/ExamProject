<?php

include __DIR__ . "/../config.php";

function asset(string $path): string
{
    return "/template/$path";
}

function controller($path)
{
    return "/app/controllers/$path";
}