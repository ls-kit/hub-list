<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyServiceRequest;
use App\Http\Requests\ServiceStroeRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use League\Glide\Server;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    use MediaUploadingTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $services = Service::all();
        // return $services;
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceStroeRequest $request)
    {
        // return $request;
        $service = Service::create($request->all());
        if ($request->input('logo', false)) {
            $service->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }
        return redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        // $service = Service::findOrFail($id);

        return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        // $service = Service::findOrFail($id);

        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $service->update($request->all());

        if ($request->input('logo', false)) {
            if (!$service->logo || $request->input('logo') !== $service->logo->file_name) {
                $service->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($service->logo) {
            $service->logo->delete();
        }

        return redirect()->route('admin.service.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }

    public function massDestroy(MassDestroyServiceRequest $request)
    {
        Service::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
