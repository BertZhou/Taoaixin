<?php

namespace App\Http\Controllers\User;

use ImageTool;
use App\Models\User;
use App\Models\UserVerification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function index(Request $request)
    {
        $verification = UserVerification::where('user_id', $request->user()->id)->first();

        return view('user.verification.index', ['verification' => $verification]);
    }

    public function create()
    {
        return view('user.verification.show');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type'                  =>  'required|in:enterprise,person',
            'license_name'          =>  'required_if:type,enterprise|string',
            'license_no'            =>  'required_if:type,enterprise|string',
            'license_expire_date'   =>  'required_if:type,enterprise|date',
            'license_image'         =>  'required_if:type,enterprise|image',
            'real_name'             =>  'required|string',
            'idcard_no'             =>  'required|string|size:18',
            'idcard_front_image'    =>  'required',
            'idcard_back_image'     =>  'required',
            'contact_name'          =>  'required_if:type,enterprise|string',
            'contact_mobile'        =>  'required_if:type,enterprise|zh_mobile'
        ]);

        $verification = UserVerification::find($request->user()->id);
        if (!empty($verification) && $verification->status == 'accept') {
            return redirect()->back();
        }

        # deal img file
        $path = [
            'license_image'         =>  storage_path('verification/license/'.date('YmdHis').str_random(18).'.jpg'),
            'idcard_front_image'    =>  storage_path('verification/idcard/'.date('YmdHis').str_random(18).'.jpg'),
            'idcard_back_image'     =>  storage_path('verification/idcard/'.date('YmdHis').str_random(18).'.jpg')
        ];

        $idcard_front_image = $request->file('idcard_front_image');
        $idcard_back_image  = $request->file('idcard_back_image');

        if ($idcard_front_image->isValid() && $idcard_back_image->isValid()) {
            $idcard_front_image = ImageTool::make($idcard_front_image);
            $idcard_back_image  = ImageTool::make($idcard_back_image);
        } else {
            return $this->error('file_invalid');
        }
        
        if (empty($idcard_front_image) || empty($idcard_back_image)) {
            $request->flash();
            return redirect()->back()->withErrors('图片不合法，请重新上传');
        }

        if ($request->input('type') == 'enterprise') {
            $license_image = $request->file('license_image');
            if ($license_image->isValid()) {
                $license_image = ImageTool::make($license_image);
            } else {
                return $this->error('file_invalid');
            }

            if (empty($license_image)) {
                $request->flash();
                return redirect()->back()->withErrors('图片不合法，请重新上传');
            }

            $license_image->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path['license_image']);
        }

        $idcard_front_image->resize(1280, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path['idcard_front_image']);

        $idcard_back_image->resize(1280, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path['idcard_back_image']);

        if (!empty($verification) && $verification->status == 'decline') {
            $verification->update([
                'type'                  =>  $request->input('type'),
                'status'                =>  'pending',
                'license_name'          =>  $request->input('license_name'),
                'license_no'            =>  $request->input('license_no'),
                'license_expire_date'   =>  $request->input('license_expire_date'),
                'license_image'         =>  $path['license_image'],
                'real_name'             =>  $request->input('real_name'),
                'idcard_no'             =>  $request->input('idcard_no'),
                'idcard_front_image'    =>  $path['idcard_front_image'],
                'idcard_back_image'     =>  $path['idcard_back_image'],
                'contact_name'          =>  $request->input('contact_name'),
                'contact_mobile'        =>  $request->input('contact_mobile')
            ]);
        } elseif (empty($verification)) {
            UserVerification::create([
                'user_id'               =>  $request->user()->id,
                'type'                  =>  $request->input('type'),
                'status'                =>  'pending',
                'license_name'          =>  $request->input('license_name'),
                'license_no'            =>  $request->input('license_no'),
                'license_expire_date'   =>  $request->input('license_expire_date'),
                'license_image'         =>  $path['license_image'],
                'real_name'             =>  $request->input('real_name'),
                'idcard_no'             =>  $request->input('idcard_no'),
                'idcard_front_image'    =>  $path['idcard_front_image'],
                'idcard_back_image'     =>  $path['idcard_back_image'],
                'contact_name'          =>  $request->input('contact_name'),
                'contact_mobile'        =>  $request->input('contact_mobile'),
            ]);
        } else {
            // throw error
        }

        return redirect('business/verification');
    }
}