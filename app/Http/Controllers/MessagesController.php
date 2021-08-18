<?php

namespace App\Http\Controllers;

use App\Repositories\MessagesRepository;
use App\Models\Messages;
use App\Http\Requests\StoreMessages;

class MessagesController extends Controller
{
    /**
     * @var MessagesRepository
     */
    private $messagesRepository;
    public function __construct(MessagesRepository $messagesRepository)
    {
        $this->messagesRepository = $messagesRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $messages = $this->messagesRepository->all();
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
    public function store(StoreMessages $request)
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
//    public function update(Request $request, $id)
    public function update(StoreMessages $request, $id)
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
