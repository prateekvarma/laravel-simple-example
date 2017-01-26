@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <h3>Here is what you can do now :</h3>
                        <div class="links">
                            <ul>
                            <li><a href="{{ url('/add-link') }}">Add a link</a></li>
                            <li><a href="{{ url('/links') }}">Display list of all links</a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
