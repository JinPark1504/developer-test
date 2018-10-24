@extends('layouts.app')
@section('content')

    <div class="container py-3">
        <h1>{{ $user->name }}'s Notes</h1>
        <a href="{{ url('notes/'.$user->email.'/create') }}" class="btn btn-sm btn-light" style="font-weight:800;font-size:20px;">Create note</a>
        <table class="table">
            <thead>
                <tr>
                    <th style="width:15%">Title</th>
                    <th style="width:65%">Body</th>
                    <th style="width:10%">Updated At</th>
                    <th style="width:5%"></th>
                    <th style="width:5%"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($notes as $note)
                    <tr>
                        <td>
                            {{ $note->title }}
                        </td>
                        <td>
                            {{ $note->body }}
                        </td>
                        <td class="text-right">
                            {{ \Carbon\Carbon::parse($note->updated_at)->format('m/d/Y') }}
                        </td>
                        <td>
                            <form action="{{ url('notes/edit/'.$note->slug) }}" method="GET" class="form" role="form">
                                <button class="btn btn-primary pull-right">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ url('notes/delete/'.$note->slug) }}" method="POST" class="form" role="form">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-primary pull-right">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            No notes! 
                            <a href="{{ url('notes/'.$user->email.'/create') }}" class="btn btn-sm btn-light">Create note</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@stop