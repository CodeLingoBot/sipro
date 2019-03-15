@extends('layouts.app')

@section('btn-left')
    <a class="btn btn-primary" href="{{ url('test') }}">
        <i class="fa fa-btn fa-arrow-circle-left"></i> {{ _v('back') }}
    </a>
@endsection

@section('body')
    <form action="">
        <div id="siproEmailsBadges"></div>
        <textarea id="siproTextAreaEmails"></textarea>
        <button type="button" class="btn btn-info" id="siproAddButton">{{_v('add')}}</button>
        <button type="submit" class="btn btn-success" disabled id="siproSendButton">{{_v('send')}}</button>
    </form>
    <script type="text/javascript" src="{{ URL::asset('js/tests/apply.js') }}"></script>
@endsection