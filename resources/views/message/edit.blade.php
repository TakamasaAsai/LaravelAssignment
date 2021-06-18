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
                        <form method="POST" action="{{route('message.update', ['id' => $message->id])}}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">件名</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                                       value="{{ $message->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">本文</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                          name="message">{{ $message->message }}</textarea>
                            </div>
                            <input class="btn btn-info" type="submit" value="更新する">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
