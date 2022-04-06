<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPesrsonRequest;
use App\Http\Requests\PersonStoreRequest;
use App\Http\Requests\PersonUpdateRequest;
use App\SkilledPerson;
use Symfony\Component\HttpFoundation\Response;

class SkilledPersonController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = SkilledPerson::all();

        return view('admin.skilled-person.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skilled-person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonStoreRequest $request)
    {
        $person = SkilledPerson::create($request->all());
        if ($request->input('logo', false)) {
            $person->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }
        return redirect()->route('admin.person.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SkilledPerson $person)
    {
        return view('admin.skilled-person.show', compact('person'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SkilledPerson $person)
    {
        return view('admin.skilled-person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonUpdateRequest $request, SkilledPerson $person)
    {
        if ($request->input('logo', false)) {
            if (!$person->logo || $request->input('logo') !== $person->logo->file_name) {
                $person->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($person->logo) {
            $person->logo->delete();
        }

        return redirect()->route('admin.person.index');

    }

/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkilledPerson $person)
    {

        $person->delete();
        return redirect()->back();
    }

    public function massDestroy(MassDestroyPesrsonRequest $request)
    {
        
        SkilledPerson::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
