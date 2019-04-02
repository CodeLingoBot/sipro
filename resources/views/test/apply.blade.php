@php
    $name = $test->description;
@endphp
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
        <button type="button" class="btn btn-info" id="siproAddButton">
            <i class="fas fa-plus"></i>
            {{_v('add')}}
        </button>
        <button type="submit" class="btn btn-success" disabled id="siproSendButton">
            <i class="fas fa-paper-plane"></i>
            {{_v('send')}}
        </button>
    </form>
    <script type="text/javascript" src="{{ URL::asset('js/tests/apply.js') }}"></script>
@endsection