@extends('layouts.home')
@section('head')
<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="content">
        <div class="title">Welcome to CareerTag!!</div>
        <a href="job-seeker/registration"><button type="submit" class="btn btn-success">Join Career Tag</button></a>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</div>
@endsection
@stop