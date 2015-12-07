@extends('base')

@section('active1', " class='active'")
@section('href1', '#')

@section('main')
        @foreach($books as $book)
            <div style='padding: 10px' class='book" + r[i][0] + " row'>
                <div class='col-lg-3'>
                    <img src='{{ $book->photo }}' width='100%' alt='{{ $book->name }}'>
                </div>
                <div class='col-lg-9'>
                    <p><b>Назва: </b>{{ $book->name }}</p>
                    <p><b>Автор: </b>{{ $book->author }}</p>
                    <p><b>Мова: </b>{{ $book->lang }}</p>
                    <p><b>Рік: </b>{{ $book->year }}</p>
                    <p><b>Віддає: </b><a id='{{ $book->id }}' target='_blank' href='https://vk.com/id{{ $book->user }}'>Користувач</a></p>
                    <form action='book.php?id={{ $book->id }}' method='post'>
                        <input name='user' type='hidden' value=''>
                        <input value='Детальніше' class='btn btn-primary' type='submit'>
                    </form>
                </div>
            </div>
        @endforeach
@stop

