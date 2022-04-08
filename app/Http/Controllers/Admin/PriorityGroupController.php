<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PriorityGroup;

class PriorityGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  __construct(PriorityGroup $priorityGroupModel)
    {
        $this->priorityGroup = $priorityGroupModel;
    }
    public function index()
    {
        $priority_groups = $this->priorityGroup->all();
        return view('admin.priority-groups.index', compact('priority_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.priority-groups.create');
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
            'name' => ['required', 'string']
        ]);
        $this->priorityGroup->create($validated_data);
        return redirect()->route('admin.priority-groups.index')->with('status', 'Tạo nhóm ưu tiên thành công');
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
        $priority_groups = $this->priorityGroup->findOrFail($id);
        return view('admin.priority-groups.edit', compact('priority_groups'));
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
            'name' => ['required', 'string']
        ]);
        $priority_groups = $this->priorityGroup->findOrFail($id);
        $priority_groups->update($validated_data);
        return redirect()->route('admin.priority-groups.index')->with('status', 'Cập nhật nhóm ưu tiên thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $priority_groups = $this->priorityGroup->findOrFail($id);
        $priority_groups->delete();
        return redirect()->route('admin.priority-groups.index')->with('status', 'Xóa nhóm ưu tiên thành công');
    }
}