<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContestantRequest;
use App\Models\Contestant;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    public function show($id)
    {
        $contestant = Contestant::findOrFail($id);
        return view('pages.contestant.show', ['contestant' => $contestant]);
    }

    public function create()
    {
        return view('pages.contestant.create');
    }

    public function store(StoreContestantRequest $request)
    {
        $validate = $request->validated();
        
        $c = Contestant::create($validate);

        return redirect()->route('contestant.show', ['contestant' => $c->id]);
    }
}
