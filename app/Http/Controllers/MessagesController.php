<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;

use App\Models\Messages;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //クエリビルダ
        $messages = DB::table('messages')
            ->select('id', 'title', 'message', 'created_at')
            ->orderBy('id', 'desc')
            ->get();
        return view('message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('message.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Requestこれでスーパーグローバル変数と同じことできる
        $message = new Messages;

        $message->title = $request->input('title');
        $message->message = $request->input('message');


        $message->save();

        return redirect('message/index');
//         dd($title);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $message = Messages::find($id);

        return view('message.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $message = Messages::find($id);

        $message->title = $request->input('title');
        $message->message = $request->input('message');


        $message->save();

        return redirect('message/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $message = Messages::find($id);
        $message->delete();
        return redirect('message/index');

    }
}
