<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Journal;
use App\Settings;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\Store;


class JournalController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        if(Auth::check()) {

            $entries = Journal::orderBy('created_at', 'desc')
                    ->where('user_id', '=', Auth::user()->id)
                    ->paginate(15);

            $user = Auth::user();

            //dd($user);

            return view('entries.overview', ['entries' => $entries, 'user' => $user]);
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('entries.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALID USER
        $user = Auth::user(); 
        if(!$user) {
            return redirect()->back();
        }

        //$encrypted = Crypt::encryptString($request->input('title'));

        $entry = new Journal([
            'title'     => $request->input('title'),
            'entry'     => $request->input('entry'),
            'user_id'   => Auth::user()->id, 
            
        ]);
        $user->entries()->save($entry);

        return redirect()
            ->route('entries.overview')
            ->with('info', 'Good news, your entry saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $entry = Journal::find($id);
       return view('entries.edit' , ['entry' => $entry]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Store $session, Request $request, Journal $journal)
    {
        $entry = Journal::find($request->input('id'));
        $entry->title = $request->input('title');
        $entry->entry = $request->input('entry');

        $entry->save();
        return redirect()->route('entries.overview')->with('info', 'Entry successfully updated!');
    }

    /**
     * View the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $entry = Journal::find($id);
        $user = Auth::user();
        return view('entries.view' , ['entry' => $entry, 'user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        //
    }
}
