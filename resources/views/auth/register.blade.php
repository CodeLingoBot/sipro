@extends('home')

@section('body')
    @php(LinkButton::build("facebook", "redirect", "fa fa-facebook"))
    <hr>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}
        @php(Field::build("name", "text"))
        @php(Field::build("email", "email"))
        @php(Field::build("password", "password"))
        @php(Field::build("password_confirmation", "password"))
        @php(Submit::build("fas fa-btn fa-user-plus"))
    </form>
@endsection
