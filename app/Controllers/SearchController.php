<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Framework\Routing;
use App\Models\{Section, Topic, Post};
use App\Models\User;

use App\Framework\View;
use App\Database\DB;


class SearchController extends Controller
{

    public  function searchArticles ($t)
  {
//        $arraytext=explode(" ", $t);
        $result=DB::select("SELECT * FROM 'posts' WHERE  'title' LIKE = '%t%'");

    }
    public function SearchForm()
    {
        if (($_GET) && (!empty($_GET["t"]))) {
            $results = searchArticles($_GET["t"]);
            if (count($result) != 0) {
                for ($i = 0; $i < count($result); $i++) {

                }
            } else echo "Ничего не найдено";
        } else echo "Не задан поисковый запрос";
    }

View::show("search");
}
//global $Page;
//    echo ' <form method="post" action="/search/'.$Page.';">
//        <input type="text" name="text" placeholder="Что искать" required>
//        <input type="submit" name="enter" value="Поиск" >
//    </form>';
}
}
