@extends('layouts.app')
@section('content')

    <div class="container py-3">
        <h1>Users</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="text-right">Notes</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-right">
                            <a href="{{ url('notes', ['user_email' => $user->email]) }}" class="btn btn-sm btn-light">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No users</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@stop