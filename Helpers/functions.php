<?php

namespace DSA\Helpers;

class Functions {
    public static function dump($data): void
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
}
