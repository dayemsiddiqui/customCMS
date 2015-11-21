<?php

namespace App\Http\Controllers;

use App\Category;
use Log;
use App\Post;
use App\Tag;
use App\Posttag;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;


class PostsController extends Controller
{

        public function index(){
            $posts= Post::where('show', '1')->latest()->get();
            $categories= Category::latest()->get();
            $tags = Posttag::latest()->get();
            $tagnames = Tag::latest()->get();
            if($posts->isEmpty()){
                return redirect('/');
            }
            return view('news',compact('posts','categories','tags','tagnames'));
        }

        public function show($id){
            $posts = Post::findOrFail($id);
            $categories= Category::latest()->get();
            $tags = Posttag::latest()->get();
            $tagnames = Tag::latest()->get();
            return view('posts.show',compact('posts','categories','tags','tagnames'));
        }

        public function editedPost(Requests\CreatePostRequest $request){
            $input = $request->all();
            $post = Post::findOrFail($input['id']);
            $post->title = $input['title'];
            $post->author = $input['author'];
            $post->category = $input['category'];
            $post->content = $input['content'];
            $post->show = $input['show'];
            if ($request->file('image') && $request->file('image')->isValid())
            {
                $path = public_path();
                $path = $path . "/img/uploaded";
                $request->file('image')->move($path, $post->id . ".jpg");
                $post->image_id  = $post->id . ".jpg";
            }
            $post->save();
            app('App\Http\Controllers\AdminController')->updateTag($request);
            session()->flash('alert', "A post has been edited.");
            return redirect('/news/create');
        }

        public function create(){
            $categories= Category::latest()->get();
            $posts= Post::latest()->get();
            $tagnames = Tag::latest()->get();
            return view('adminPost',compact('categories','posts', 'tagnames'));
        }

        public function categoryShow($id){
            $posts= Post::where('category','=',$id)->where('show', '1')->get();
            $categories= Category::latest()->get();
            $tags = Posttag::latest()->get();
            $tagnames = Tag::latest()->get();
            if($posts->isEmpty()){
                return redirect('news');
            }
            return view('posts.catshow',compact('posts', 'categories','tags','tagnames'));
        }
        public function tagShow($id){
            $categories= Category::latest()->get();
            $tags = Posttag::latest()->get();
            $tagnames = Tag::latest()->get();
            $posts = Tag::find($id)->posts()->latest()->get();

            return view('tagspecific',compact('categories','tags','tagnames','posts'));
        }

    /**
     * @param Requests\CreatePostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\CreatePostRequest $request){
          $id = Post::latest()->first();
          if($id){
              $id = $id->id + 1;
          }
          else{
              $id = 1;
          }
        $input = $request->all();
        if ($request->file('image') && $request->file('image')->isValid())
        {
            Log::info("In blog");
            $path = public_path();
            $path = $path . "/img/uploaded";
            $request->file('image')->move($path, $id . ".jpg");
            $input['image_id'] = $id . ".jpg";
        }
        unset($input['image']);
        Post::create($input);
        session()->flash('alert', "New post has been created.");

        //=====================TAG MANIPULATION==============================//
        $input = $request->input('tags');
        $post_id  = $id;
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
        return back();
    }

    public function contactSend(Requests\ContactRequest $request){
        $name  = $request->input("name");
        $email  = $request->input("email");
        $comment  = $request->input("comment");
            Mail::send('myemail', ['name'=> $name, 'email'=> $email, 'comment' => $comment ] , function ($m){
                $m->to("connect@intlcounselling.com", "Hi!")->subject('You got some feedback from intlcounselling website!');
            });

        session()->flash('success', "Your form has been submitted successfully");
        return redirect("/contact");
    }

    //==============================JSON API INTEGRATION=======================================//
    public function getAllPosts(){
        $posts= Post::where('show', '1')->latest()->get();
        if($posts->isEmpty()){
            $errorResponse = [
                'errors'    => 'Not found any resource',
                'message'   => 'The resource you requested was not found may be there is no article published yet'
            ];
            return response()->json($errorResponse, 404);
        }
        return response()->json($posts);
    }

    public function getAllCategories(){
        $categories = Category::latest()->get();
        if($categories->isEmpty()){
            $errorResponse = [
                'errors'    => 'Not found any resource',
                'message'   => 'The resource you requested was not found may be there is no category published yet'
            ];
            return response()->json($errorResponse, 404);
        }
        return response()->json($categories);
    }

    public function getPost($id){
        $posts= Post::where('id', $id)->get();
        $tags = Post::find($id)->tags()->latest()->get();
        if($posts->isEmpty()){
            $errorResponse = [
                'errors'    => 'Not found any resource',
                'message'   => 'The post you are looking for was not found'
            ];
            return response()->json($errorResponse, 404);
        }
        return response()->json(compact('posts','tags'));
    }

    public function getTags(){
        $tagnames = Tag::latest()->get();
        if($tagnames->isEmpty()){
            $errorResponse = [
                'errors'    => 'Not found any resource',
                'message'   => 'No tags were found'
            ];
            return response()->json($errorResponse, 404);
        }
        return response()->json($tagnames);
    }

    public function getCategoryPost($id){
        $posts = Post::where('category','=',$id)->where('show', '1')->get();
        if($posts->isEmpty()){
            $errorResponse = [
                'errors'    => 'Not found any resource',
                'message'   => 'No posts were found'
            ];
            return response()->json($errorResponse, 404);
        }
        return response()->json($posts);
    }

    public function getTagPost($id){
        $posts = Tag::find($id)->posts()->latest()->get();
        if($posts->isEmpty()){
            $errorResponse = [
                'errors'    => 'Not found any resource',
                'message'   => 'No posts were found'
            ];
            return response()->json($errorResponse, 404);
        }
        return response()->json($posts);
    }


}
