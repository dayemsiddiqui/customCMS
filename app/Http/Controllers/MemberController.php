<?php

namespace App\Http\Controllers;

use Log;
use App\Category;
use App\Member;
use App\Posttag;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $members = Member::latest()->get();
        //return view("member");
        return view("adminMember", compact('members'));
    }

    public function add(Requests\CategoryRequest $request){
        $id = Member::latest()->first();
        if($id){
            $id = $id->id + 1;
        }
        else{
            $id = 1;
        }
        $input = $request->all();
        $days = $request->input('days');
        $temp = "";
        foreach($days as $day){
            $temp = $temp . "|" . $day;
        }
        $input['availability'] = $temp;
        if ($request->file('image') && $request->file('image')->isValid())
        {
            $path = public_path();
            $path = $path . "/img/emp";
            $request->file('image')->move($path, $id . ".jpg");
            $input['image'] = $id . ".jpg";
        }


        Member::create($input);
        session()->flash('alert', "A member has been created.");
        return back();
    }
    public function show(){
        $members= Member::latest()->get();
        Log::info('SOMETHING DIF: '. $members->isEmpty());
        if($members->isEmpty()){
            $someshit = -1;

        }else{
            $someshit = 0;
        }

        return view('about2',compact('members','someshit'));
    }
    public function memberDetails($id){
        $member = Member::findOrFail($id);
        $availability = explode("|", $member->availability);
        array_shift($availability);
        return view("details",array('member' => $member, 'availability' => $availability));
    }
    public function delete(Requests\CategoryRequest $request){
        $input = $request->input('id');
        Member::where('id', $input)->delete();
        session()->flash('alert', "A member has been deleted.");
        return back();
    }

}
