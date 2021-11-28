<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Tag;

class MainController extends Controller
{
    public function main()
    {
        $ids = array();
        $count = rand(1,5);
        if ($count == 5) {
            $ids = [1, 2, 3, 4, 5];
        } else {
            for ($i = 0; $i < $count; $i++) {
                $number = 1;
                while (in_array($number, $ids)) {
                    $number = rand(2,5);
                }
                array_push($ids, $number);
            }
        }
        $tags = Tag::WhereIn('id', $ids)->get();
        var_dump($tags);
    }
}
