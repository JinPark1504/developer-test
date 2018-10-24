@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit note</div>
                    <div class="panel-body">
                        <form action="{{ url('notes/edit/'.$note->slug) }}" method="POST" class="form" role="form">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ old('title', $note->title) }}">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="15" name="body">{{ old('body', $note->body) }}</textarea>
                            </div>

                            <button class="btn btn-primary pull-right">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop