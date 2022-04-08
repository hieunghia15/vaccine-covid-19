<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ward;
use App\Models\District;
use App\Models\Province;
use Auth;
use Carbon\Carbon;
use Hash;

class UserController extends Controller
{
    public function __construct(User $userModel, Ward $wardModel, District $districtModel, Province $provinceModel)
    {
        $this->users = $userModel;
        $this->wards = $wardModel;
        $this->districts = $districtModel;
        $this->provinces = $provinceModel;
    }
    public function index()
    {
        $users = Auth::user();
        $birthday = Carbon::parse($users->birthday)->format('d/m/Y');
        return view('citizen.user.personal-info', compact('users', 'birthday'));
    }
    public function editProfile($id)
    {
        $users = $this->users->findOrFail($id);
        $provinces = Province::all();
        $province_user_id = $users->ward->district->province->id;
        $province_user = Province::where('id', '<>', $province_user_id)->get();
        return view('citizen.user.update', compact('users', 'provinces', 'province_user'));
    }
    public function updateProfile(Request $request, $id)
    {
        $validated_data = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'before:now'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'identification' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'ward_id' => ['required', 'string'],
        ]);
        $user = $this->users->findOrFail($id);
        $user->update($validated_data);
        return redirect()->route('citizen.user.index')->with('status', 'Cập nhật thông tin thành công');;
    }
    public function showChangePassword()
    {
        return view('citizen.user.change-password');
    }
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Mật khẩu hiện tại không khớp");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "Mật khẩu mới không thể giống mật khẩu cũ");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('citizen.user.index')->with("status", "Thay đổi mật khẩu thành công");
    }
}