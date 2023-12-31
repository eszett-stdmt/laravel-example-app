<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;

use Illuminate\Http\Request;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        //
        $tweetId = (int) $request -> route('tweetId');
        if (!$tweetService -> checkOwnTweet($request -> user() -> id, $tweetId)){
            throw new AccessDeniedHttpException();
        }
        $tweet = Tweet::where('id', $tweetId)
            ->firstOrFail();
            //if (is_null($tweet)){
            //    throw new NotFoundHttpExeption('存在しないつぶやきです');
            //}
        return view('tweet.update')->with('tweet', $tweet);
    }
}
