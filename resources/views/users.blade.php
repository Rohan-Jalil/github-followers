
@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="tab-pane" id="exampleTabsLeftSix" role="tabpanel">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Search GitHub Users</div>
                            <input type="text" placeholder="Search.." name="username" id="username" required>
                            <button type="submit" value="Searchs" id="search" >Search</button>
                    </div>
                </div>
            </div>

            <hr>
            <table class="table table-hover table-striped w-full" style="width: 60%;">
                <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Action</th>

                </tr>
                </tfoot>
                <tbody id="list_user">

                </tbody>
                <button id="follower_button" style="display: none"><a id="follower"></a></button>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/user.js') }}"></script>
@endsection