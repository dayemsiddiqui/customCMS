<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posttag;
use App\Tag;
use App\Member;
use Log;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;


/**
 * Class AdminController
 * The purpose of Admin Controller is to manage
 * the admin panel and integrate all the other
 * components of the admin panel together
 * @package App\Http\Controllers
 *
 */

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }
    public function manage(){
        $input = Category::latest()->get();
        $tags = Tag::latest()->get();
        $posts = Post::latest()->get();
        $tagnames = Tag::latest()->get();
        $members = Member::latest()->get();
       return view("admin", compact('input','tags','posts','tagnames','members'));
       // return view("createCategory", compact('input','tags','posts','tagnames','members'));
    }
    public function add(Requests\CategoryRequest $request){
       $input = $request->all();
        if($request->input("category") == ""){
            session()->flash('alert', "Please type a category name");
            return back();
        }
        Category::create($input);
        session()->flash('alert', "A category has been created.");
        return back();
    }

    public function addTag(Requests\TagRequest $request){
        $input = $request->input('tag_name');
        $postId = $request->input('post_id');
        $input = preg_replace('/\s+/', '', $input);
        $input = explode(",", $input);

        foreach($input as $i){
        Log::info('Showing user profile for user: '. $i);
        $check  =  Tag::where('tag_name', $i)->get();
        if($check->isEmpty()){
        Tag::create(['tag_name' => $i]);
        }
        }
        foreach($input as $i){
            $check  =  Tag::where('tag_name', $i)->get();
            if(!$check->isEmpty()){
                Log::info('ID which exist: '. $check->first()->id);
                Posttag::create(['tag_id' => $check->first()->id, 'post_id' => $postId]);
            }
        }
        session()->flash('alert', "Tags have been created.");
        return back();
    }

    public function deleteTag(Requests\TagRequest $request){
        $input = $request->input('tag_id');
        Posttag::where('tag_id', $input)->delete();
        Tag::where('id', $input)->delete();
        session()->flash('alert', "A tag has been deleted.");
        return back();
    }

    public function deletePost(Requests\TagRequest $request){
        $input = $request->input('post_id');
        Post::where('id', $input)->delete();
        session()->flash('alert', "A post has been deleted.");
        return back();
    }

    public function editPost(Requests\TagRequest $request){
        $input = $request->input('post_id');
        $categories= Category::latest()->get();
        $post = Post::find($input);
        if($post==null){
            return back();
        }
        $tagsId = Posttag::where('post_id', $input)->get();
        $tagnames = Tag::latest()->get();
        //$post = Post::where('id', $input)->get();
        return view("editPost",compact("post", "categories", "tagsId", "tagnames"));
    }


    public function editMember(Requests\TagRequest $request){
        $memberId = $request->input('id');
        $member = Member::find($memberId);
        if($member==null){
            return back();
        }
        return view("editMember",compact("member"));
    }

    public function updateTag(Requests\CreatePostRequest $request){
        $input = $request->input('tags');
        $post_id  = $request->input('id');
        $newIds = [];
        if(count($input) > 0){
        foreach($input as $i){
            $tags  = Tag::where('tag_name', $i)->count();
            if ($tags <= 0) {
                $newTag = new Tag;
                $newTag->tag_name = $i;
                $newTag->save();
            }
        }
        foreach($input as $i){
            $temp = Tag::where('tag_name', $i)->get()[0];
                array_push($newIds,$temp->id);
        }
        foreach($newIds as $i){
            $count = Posttag::where('post_id', $post_id)->where('tag_id', $i)->count();
            if ($count <= 0) {
               // $tag_id = Tag::where('tag_name', $i)->get()[0];
                $newPostTag = new Posttag;
                $newPostTag->tag_id = $i;
                $newPostTag->post_id = $post_id;
                $newPostTag->save();
            }
        }
        }
        //This placement of the following variable is important dont place it at top
        $preExisting = Posttag::where('post_id', $post_id)->get();
        foreach($preExisting as $pre){
            if(!in_array($pre->tag_id, $newIds)){
                 Posttag::where('tag_id', $pre->tag_id)->where('post_id', $post_id)->delete();
            }
        }
        //return redirect("/news");
    }


    /**
     * @param Requests\TagRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Requests\TagRequest $request){
        $user = $request->user();
        Log::info("Logging one variable: " . $user->password);
        Log::info("Logging one variable: " . bcrypt($request->input('oldpass')));
        if(strlen($user->oldpass) <= 0 || ($user->password ==  bcrypt($request->input('oldpass'))) ){
         //   Log::info("Logging one variable: " . $user->password);
          //  Log::info("Logging one variable: " . $request->oldpass);
            return redirect("news");

        }

        return redirect("admin");

    }
    public function deleteCategory(Requests\TagRequest $request){
        $input = $request->input('id');
        $total = Category::latest()->get();
        if(count($total) > 1){
            Category::where('id', $input)->delete();
        }
        session()->flash('alert', "A category has been deleted.");
        return back();
    }

}
