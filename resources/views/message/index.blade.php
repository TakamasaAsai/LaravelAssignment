@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="GET" action="{{ route('message.create') }}">
                            <button type="submit" class="btn btn-primary btn-lg">
                                投稿
                            </button>
                        </form>
                        @foreach($messages as $message)
                            <div class="border my-2 p-2">
                                <div class="text-secondary">件名:{{ $message->title }}</div>
                                <div class="p-2">{{ $message->message }}</div>
                                <div class="text-secondary">投稿日:{{ $message->created_at }}</div>
                                <table>
                                    <tr>
                                        <td>
                                            <form method="GET"
                                                  action="{{ route('message.edit', ['id' => $message->id])}}">
                                                @csrf

                                                <input class="btn btn-outline-info" type="submit" value="変更する">
                                            </form>
                                        </td>
                                        <td>
                                            <form method="POST"
                                                  action="{{ route('message.destroy', ['id' => $message->id])}}"
                                                  id="delete{{ $message->id }}">
                                                @csrf
                                                <input class="btn btn-outline-dark" type="submit"
                                                       onclick="deletePost(this);"
                                                       value="削除する">
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除していいですか?')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
@endsection
