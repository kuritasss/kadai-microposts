@if (Auth::user()->is_favorite($micropost->id))
    {{-- Unfavoritesボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorites', ['class' => 'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@else
    {{-- Favoritesボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorites', ['class' => 'btn btn-light btn-sm']) !!}
    {!! Form::close() !!}
@endif