@if ($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('message'))

    <div class="alert alert-warning">
        <ul>
           {{Session::get('message')}}
        </ul>
    </div>






    @endif