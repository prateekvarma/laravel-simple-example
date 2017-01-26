@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of all links :</div>

                <div class="panel-body">
                    <table class="table">
                    <thead>
                      <tr>
                        <th>URL</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $link)
                      <tr>
                        <td>{{ $link->url }}</td>
                        <td>{{ $link->description }}</td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
