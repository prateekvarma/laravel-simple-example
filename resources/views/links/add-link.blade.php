@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new link :</div>

                <div class="panel-body">
                    <form method="POST" action="/links">
                        <div class="form-group">
                            <label for="url">URL: </label>
                            <input type="text" name="url" class="form-control"/>
                            <label for="description">Description: </label>
                            <input type="text" name="description" class="form-control"/>
                            <br />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" value="Submit" class="btn btn-success pull-right"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection