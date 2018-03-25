@extends('layout.main')
@section('title','DASHBOARD | PAGE')
@section('name','DASHBOARD | PAGE')

@section("content")
    @include('layout.alert')
    <section class="row new_post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What do want to say ?!! </h3>
                <form action="cpost" method="post">
                    <div class="from-group">
                        <textarea class="form-control" name="new_post" id="new_post"  rows="5" placeholder="type here"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary"> Post  </button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>
            </header>
        </div>




    </section>
    <div class="section row posts">
        <div class="col-md-6 col-md-offset-3">
            <header> <h3>   what other people say .. </h3>
            </header>
            @foreach($posts as $p)
            <article class="post">
                <p class="body-content">  {{$p->body}} </p>
                <div class="info">
                   post craeted by  {{$p->client->username}}  at {{$p->client->created_at}}
                </div>
                <div class="interaction">
                    <a class="ss" href="#"> like </a>|
                    <a href="# "> dislike</a>

                    @if(Auth::user()== $p->client)
                        |
                        <a  data-toggle="modal" href="#edit-model"  > Edit</a>|
                    <a href="{{route('delete',['post_id'=>$p->id])}}"> Delete</a>

                    @endif
                </div>

            </article>
                @endforeach
            <div class="modal" tabindex="-1" role="dialog" id="edit-model">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 data-toggle="modal" data-target="#editModal" >Edit Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <textarea name="post_body" id="post_body" class="form-control" rows="5"></textarea>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
