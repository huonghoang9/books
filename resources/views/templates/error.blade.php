@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@if ( Session::has('success') )
    <strong>{{ Session::get('success') }}</strong>
@endif
