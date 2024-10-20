<?php

function get_or_set_transient($key, callable $callback, $expiration = 24 * 60 * 60)
{
    $cached_result = get_transient($key);

    if ($cached_result === false) {
        $cached_result = $callback();

        set_transient($key, $cached_result, $expiration);
    }

    return $cached_result;
}
