<?php
function partlist($arr)
{
    $list = [];
    for ($i = 1; $i < count($arr); $i++) {
        $list[] = [
            implode(" ", array_slice($arr, 0, $i)),
            implode(" ", array_slice($arr, $i)),
        ];
    }

    return $list;
}
print_r(partlist(["Seguro", "que", "apruebo", "esta", "asignatura"]));
