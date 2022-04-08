<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacture;
use Illuminate\Http\Request;
use App\Models\VaccinationType;

class VaccinationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  __construct(VaccinationType $vaccinationTypeModel, Manufacture $manufactureModel)
    {
        $this->vaccination_types = $vaccinationTypeModel;
        $this->manufactures = $manufactureModel;
    }
    public function index()
    {
        $vaccination_types = $this->vaccination_types->all();
        return view('admin.vaccination-types.index', compact('vaccination_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufactures = $this->manufactures->all();
        return view('admin.vaccination-types.create', compact('manufactures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => ['required', 'string'],
            'applicable_age' => ['required', 'string'],
            'effection' => ['required', 'string'],
            'injection_dose' => ['required', 'string'],
            'injection_time' => ['required', 'string'],
            'manufacture_id' => ['required', 'string'],
        ]);
        $this->vaccination_types->create($validated_data);
        return redirect()->route('admin.vaccination-types.index')->with('status', 'Tạo loại vắc xin thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $vaccination_types = $this->vaccination_types->findOrFail($id);
        $manufacture_id = $vaccination_types->manufacture_id;
        $manufactures = $this->manufactures->where('id', '<>', $manufacture_id)->get();
        return view('admin.vaccination-types.edit', compact('vaccination_types', 'manufactures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'name' => ['required', 'string'],
            'applicable_age' => ['required', 'string'],
            'effection' => ['required', 'string'],
            'injection_dose' => ['required', 'string'],
            'injection_time' => ['required', 'string'],
            'manufacture_id' => ['required', 'string'],
        ]);
        $vaccination_types = $this->vaccination_types->findOrFail($id);
        $vaccination_types->update($validated_data);
        return redirect()->route('admin.vaccination-types.index')->with('status', 'Cập nhật loại vắc xin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vaccination_types = $this->vaccination_types->findOrFail($id);
        $vaccination_types->delete();
        return redirect()->route('admin.vaccination-types.index')->with('status', 'Xóa loại vắc xin thành công');
    }
}