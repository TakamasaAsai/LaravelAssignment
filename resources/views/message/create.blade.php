@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


{{--                        createです--}}
                        {{--                            <form method="POST" action="">--}}
                        <form method="POST" action="{{route('message.store')}}">
                            @csrf
{{--                            <br>--}}
{{--                            件名--}}
{{--                            <input type="text" name="title">--}}
{{--                            <br>--}}
{{--                            本文--}}
{{--                            <textarea name="message"></textarea>--}}
{{--                            <br>--}}
{{--                            <input class="btn btn-info" type="submit" value="投稿する">--}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">件名</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">本文</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                            </div>
                            <input class="btn btn-info" type="submit" value="投稿する">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
