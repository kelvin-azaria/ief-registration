<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContestantRequest;
use App\Models\Contestant;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    public function show()
    {
        $contestant = Contestant::findOrFail(session('id'));
        return view('pages.contestant.show', ['contestant' => $contestant]);
    }

    public function create()
    {
        return view('pages.contestant.create');
    }

    public function store(StoreContestantRequest $request)
    {
        if ((isset($request->terms)) && (isset($request->rights))) {
            $validate = $request->validated();

            if ($request->hasFile('ktm_image_path')) {
                $validate['ktm_image_path'] = $request->file('ktm_image_path')->store('ktm','public');
                $c = Contestant::create($validate);

                $request->session()->put('id', $c->id);

                return redirect()->route('contestant.success');
            }
        }
        return redirect()->back()
            ->withInput($request->input())
            ->withErrors(['terms' => ['Harus menceklis semua syarat & persetujuan']]);
    }
}
