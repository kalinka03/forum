<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Framework\Routing;
use App\Models\{Section, Topic, Post};
use App\Models\User;

use App\Framework\View;
use App\Database\DB;


class ForumController extends Controller
{
    public function SearchForm()
    {
    }

    public function showTopic() {

        $routeData = Routing::getRouteArgs();
        $sectionSlug = $routeData[2];
        $topicId = $routeData[3];

        $section = Section::getBySlug( $sectionSlug )[0];
        $topic = Topic::get( $topicId )[0];



        $postForm = isset($_POST['form']['post']) ? $_POST['form']['post'] : null;
//        var_dump($postForm );
        if ($postForm){
            $posts= new Post;
            $posts->setText($postForm);
            $posts->setTopic_id($topicId);
            $posts->setUser_id($_SESSION['user_id']);
            $date=date('Y-m-d');
            $posts->setCreated_at($date);
            $posts->save();
        }

        $posts = Post::getByTopic_id( $topicId );

        View::show("topic",
            ['section' => $section,'posts' => $posts, 'topic' => $topic]
        );
    }

    public function showSection() {

        $routeData = Routing::getRouteArgs();
        $sectionSlug = $routeData[2];

        $section = Section::getBySlug( $sectionSlug )[0];
//        $topics = Topic::getBySection_id( $section->getId() );

        $postForm = isset($_POST['form']['theme']) ? $_POST['form']['theme'] : null;
//        var_dump($postForm );
        if ($postForm){
            $topics= new Topic;
            $topics->setTitle($postForm);
            $topics->setSection_id($section ->getId());
            $topics->save();
        }
        $topics = Topic::getBySection_id($section ->getId());


//     $postForm = isset($_POST['form']['post']) ? $_POST['form']['post'] : null;
//
//        if ($postForm){
//            $Post = new Post();
//            $Post->setTitle($postForm['title']);
//            $Post->setSlug($postForm['slug']);
//            Auth::section($Post);
//            var_dump($Post);
//
//        }


//        $section = DB::select( 'SELECT * FROM sections WHERE slug = ?', [$sectionSlug] );
//
//        $topics = DB::select(
//            'SELECT * FROM topics
//            WHERE section_id = ?',
//            [$section[0]['id']]
//        );

        View::show("section",
            ['section' => $section, 'topics' => $topics]
        );
    }
//    public function SearchForm();

}