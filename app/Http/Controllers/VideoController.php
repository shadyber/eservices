<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\User;
use App\Models\Video;
use App\Notifications\BlogCreatedNotification;
use App\Notifications\VideoCreatedNotification;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vidos= Video::where('lang',config('app.locale'))->orderBy('id','desc')->paginate(9);
        return view('video.index')->with(['videos'=>$vidos])->with('error','You Don\'t Have This Permission');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  if(!Auth::user()->hasRole('admin')){
        return redirect()->back()->with('error','You Don\'t Have This Permission');
    }

        $categories=BlogCategory::all();
        return view('video.create')->with('categories',$categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\'t Have This Permission');
        }

        /*  $request->validate([
              'url' => 'required|unique:videos',
              'title' => 'required',
              'detail' => 'required',
              'thumb_small' => 'required',
              'thumb_big' => 'required',
          ]);

  */

//dd($request->input());
        $lastvideo=  Video::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Video::class,'slug',$request->title.$request->_token),

                'tags'=>$request->input('tags'),
                'url'=>$request->input('url'),
                'lang'=>$request->input('lang'),
                'videoId'=>$request->input('videoId'),
                'iframe'=>$request->input('iframe'),
                'thumb_small'=>$request->input('thumb_small'),
                'thumb_big'=>$request->input('thumb_big'),

                'user_id'=>auth()->user()->id,

                'blog_category_id'=>$request->input('blog_category_id'),
            ]
        );


        $users=User::all();
        foreach ($users as $user){
            //    $user->Notify(new VideoCreatedNotification($lastvideo));
        }

        return redirect()->back()->with('success','Video Posted Succusfully!');

    }


    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
        $video=Video::where('slug',$slug)->first();
        $video->visit++;
        $video->save();


        return view('video.show')->with('video',$video);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $videos)
    {
        return view('video.edit')->with(['video'=>$videos]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videos $videos)
    {  if(!Auth::user()->hasRole('admin')){
        return redirect()->back()->with('error','You Don\t Have This Permission');
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videos $videos)
    {
        if(!Auth::user()->hasRole('admin')){
            return redirect()->back()->with('error','You Don\t Have This Permission');
        }
    }
}
