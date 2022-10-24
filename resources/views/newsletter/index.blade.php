@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Newsletter Subscribers') }}</div>

                    <div class="card-body">
                     <table class="table table-bordered w-auto" width="100%">
                         <tr>
                             <th>No</th>
                             <th>Email</th>
                             <th>Created at</th>
                             <th width="280px">Action</th>
                         </tr>

                         @foreach($newsletters as $subscriber)
                             <tr>
                                 <td>- </td>
                                 <td> {{$subscriber->email}} </td>
                                 <td> {{$subscriber->created_at->diffForHumans()}} </td>
                                 <td>action</td>
                             </tr>
                         @endforeach
                     </table>
                    </div>
                </div>
            </div>

        </div>
@endsection
