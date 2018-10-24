@extends('layouts.app')
@section('content')

    <div class="container py-3">
        <h1>{{ $user->name }}'s Notes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>title</th>
                    <th>body</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($notes as $note)
                    <tr>
                        <td>
                            <a href="{{ url('notes/edit', [$note->slug]) }}">
                                {{ $note->title }}
                            </a>
                        </td>
                        <td>
                            {{ $note->body }}
                        </td>
                        <td class="text-right">
                            {{ $note->updated_at }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <!-- <p>No notes!</p>  -->
                            <a href="{{ url('notes/'.$user->email.'/create') }}" class="btn btn-sm btn-light">Create note</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@stop