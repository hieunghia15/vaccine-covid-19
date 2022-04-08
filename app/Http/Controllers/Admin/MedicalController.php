<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medical;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  __construct(Medical $medicalModel)
    {
        $this->medicals = $medicalModel;
    }

    public function index()
    {
        $medicals = $this->medicals->all();
        return view('admin.medicals.index', compact('medicals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medicals.create');
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
            'description' => ['required', 'string']

        ]);
        $this->medicals->create($validated_data);
        return redirect()->route('admin.medicals.index')->with('status', 'Tạo tiền sử bệnh thành công');
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
        $medicals = $this->medicals->findOrFail($id);
        return view('admin.medicals.edit', compact('medicals'));
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
            'description' => ['required', 'string']
        ]);
        $medicals = $this->medicals->findOrFail($id);
        $medicals->update($validated_data);
        return redirect()->route('admin.medicals.index')->with('status', 'Cập nhật tiền sử bệnh thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $medicals = $this->medicals->findOrFail($id);
        $medicals->delete();
        return redirect()->route('admin.medicals.index')->with('status', 'Xóa tiền sử bệnh thành công');
    }
}