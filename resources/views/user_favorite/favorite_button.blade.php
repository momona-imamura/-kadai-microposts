
    @if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['users.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorite', $micropost->id], 'method' => 'post']) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @endif