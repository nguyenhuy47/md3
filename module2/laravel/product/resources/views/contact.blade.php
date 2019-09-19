@extends('layout.app')
@section('content')
    <h1>lien he</h1>
    <form action="/contact" method="post">
        @csrf
        <p>
            <input type="text" name="username" placeholder="ten dang nhap">
        </p>

        <p>
            <input type="email" name="email" placeholder="Email">
        </p>

        <p>
            <button type="submit">Send</button>
        </p>
    </form>
@endsection
