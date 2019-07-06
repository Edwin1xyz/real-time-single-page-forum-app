<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function likeIt(Reply $reply){
        $reply->like()->create([
//            'user_id' => auth()->id,
            'user_id' => '1',
        ]);
        return response('liked', Response::HTTP_OK);
    }


    public function unLikeIt(Reply $reply){
//        $reply->like()->where(['user_id' => auth()->id() ])->first()->delete();
        $reply->like()->where('user_id', 1)->first()->delete();
        return response('unliked', Response::HTTP_OK);
    }
}
