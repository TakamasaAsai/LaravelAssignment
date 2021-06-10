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
                        <button type="submit" class="btn btn-primary">
                            新規登録
                        </button>
                        </form>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">件名</th>
                                    <th scope="col">本文</th>
                                    <th scope="col">登録日時</th>
                                    <th scope="col">詳細</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($messages as $message)
                                    <tr>
                                        <th>{{ $message->id }}</th>
                                        <td>{{ $message->title }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>{{ $message->created_at }}</td>
                                        <td><a href="{{ route('message.show', ['id' => $message->id]) }}">詳細をみる</a></td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
{{--                        {{ $messages->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
