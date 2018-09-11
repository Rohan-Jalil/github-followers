@extends('layouts.header')

@section('content')
    <h2 class="text-center"> Followers of <b id="user-follow">{{$username}}</b> </h2>
    <hr>
    <table class="table table-hover table-striped w-full" style="width: 60%;">
        <thead>
        <tr>
            <th> No.</th>
            <th>User Id</th>
            <th>Name</th>
            <th>Type</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th> No.</th>
            <th>User Id</th>
            <th>Name</th>
            <th>Type</th>
        </tr>
        </tfoot>
        <tbody id="list_followers">
        </tbody>
    </table>
    <hr>
    <button type="button" id="show_more">Show more</button>
    <hr>
@endsection

@section('scripts')
    <script src="{{ asset('/js/followers.js') }}"></script>
@endsection