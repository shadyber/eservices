@extends('layouts.admin')

@section('content')

    <div class="col-md-12">
        <div class="main-title">
            <div class="btn-group float-right right-action">
                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>

            </div>
            <h6>Post Your Video</h6>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row">

            <div class="col-md-6  offset-1">
                {{ Form::model($video, ['route' => ['video.update', $video->id], 'method' => 'PUT']) }}


                <input type="hidden" name="videoId" id="videoId" value="xxx">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="url  ">Video Url:  </label>
                    <div class="col-sm-10"><small> Ctrl + V to Past</small>
                        <input type="url" class="form-control" id="url" name="url" placeholder="Video Url" onchange="getVideo();">
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="title">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label col-sm-2" for="detail">Detail Text</label>
                    <div class="col-sm-10">
                <textarea class="form-control" id="detail" name="detail" placeholder="Enter detail" required>
                </textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="blog_category_id">Category:</label>
                    <div class="col-sm-10">
                        <select name="blog_category_id" class="form-control p-0 border-0   @error('blog_category_id') is-invalid @enderror" name="blog_category_id">
                            @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="tags">Tags #:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tags" name="tags" placeholder="Put a Tags for Search Purpose">
                    </div>
                </div>

                <input type="hidden" class="form-control" id="thumb_small" name="thumb_small" placeholder="Video Thumbnile">



                <input type="hidden" class="form-control" id="thumb_big" name="thumb_big" placeholder="Video Thumbnile Big">

                <input type="hidden" id="iframe" name="iframe">

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4" id="preview"> Preview</div>

        </div>
    </div>




    <div class="col-md-12">
        <div class="main-title">
            <div class="btn-group float-right right-action">
                <h3>List of All Videos</h3>
            </div>
            <div>
                <table>
                    <th>
                        <tr>
                            <td>id</td>
                            <td>thumb</td>
                            <td>title</td>
                            <td>detail</td>
                            <td>action</td>
                        </tr>
                    </th>


                    <tr>
                        <td>id</td>
                        <td>thumb</td>
                        <td>title</td>
                        <td>detail</td>
                        <td>action</td>
                    </tr>


                </table>

            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="/admin/custome.js"></script>
    <script>
        $(document).ready(function(){

            $('.ajaxform').submit(function(e){
                e.preventDefault();
                var url=$(this).attr("action");
                var method=$(this).attr("method");

                $.ajax({
                    url: url,
                    type: method,
                    data:  new FormData(this),
                    contentType: false,
                    cache: true,
                    processData:false,
                    beforeSend: function(){


                    },
                    success: function(data)
                    {
                        $(this).find("button[type='submit']").prop('hidden',true);

                    },
                    error: function(err)
                    {

                    }
                });
            });
        });


        function jQ_append(id_of_input, text){

            document.getElementById(id_of_input).value = text;
        }

        function getVideoId(url){
            if(url.indexOf('?') != -1 ) {
                var query = decodeURI(url).split('?')[1];
                var params = query.split('&');
                for(var i=0,l = params.length;i<l;i++)
                    if(params[i].indexOf('v=') === 0)
                        return params[i].replace('v=','');
            } else if (url.indexOf('youtu.be') != -1) {
                return decodeURI(url).split('youtu.be/')[1];
            }
            return null;
        }

        function getVideo(){


            var url=document.getElementById('url').value;

            var vid=getVideoId(url);

            var thumb_small='https://i3.ytimg.com/vi/'+vid+'/mqdefault.jpg';

            var thumb_big='https://i3.ytimg.com/vi/'+vid+'/maxresdefault.jpg';

            var iframe='<iframe width="100%"  src="https://www.youtube.com/embed/'+vid+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            jQ_append('videoId', vid);

            jQ_append('thumb_small', thumb_small);
            jQ_append('thumb_big', thumb_big);
            jQ_append('iframe', iframe);
            document.getElementById("preview").innerHTML=iframe;
        }
    </script>
@endsection

