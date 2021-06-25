<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    protected $pagePath = 'backend.pages.';

    public function index()
    {

        return view($this->pagePath . 'super-admin.index');
    }

    public function add()
    {
        return view($this->pagePath . 'super-admin.add');
    }

    public function addAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:150',
            'username' => 'required|min:3|max:20|unique:super_admins,username',
            'email' => 'required|email|unique:super_admins,email',
            'password' => 'required|min:5|max:20|confirmed',
            'password_confirmation' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif'
        ]);

        $adminObj = new SuperAdmin();
        $adminObj->name = $request->name;
        $adminObj->username = $request->username;
        $adminObj->email = $request->email;
        $adminObj->password = bcrypt($request->password);

        /*
                 * =============File upload ============
                 */

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $imageName = md5(microtime()) . '.' . $ext;
            $uploadPath = public_path('upload/super-admin/');
            if (!$file->move($uploadPath, $imageName)) {
                return redirect()->back()->with('error', 'file upload errors');
            } else {
                $adminObj->image = $imageName;
            }
        }

        if ($adminObj->save()) {
            return redirect()->route('super-admin')->with('success', 'data  inserted');
        } else {
            return redirect()->back()->with('error', 'data not inserted');
        }

    }
}
