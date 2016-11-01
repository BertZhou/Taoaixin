<?php

namespace App\Http\Controllers\Admin\Misc;

use Carbon;
use App\Models\UserVerification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'type'  =>  'in:personal,enterprise'
        ]);

        $search = array_filter($request->only('type'), function($var){return !empty($var);} );

        $verifications = new UserVerification;
        if (isset($search['type'])) {
            $verifications = $verifications->where('type', $search['type']);
        }
        $verifications = $verifications->paginate(10);
        
        return view('admin.verification.index', ['verifications' => $verifications, 'search' => $search]);
    }

    public function show($ver_id)
    {
        return $this->edit($ver_id);
    }

    public function edit($ver_id)
    {
        $verification = UserVerification::find($ver_id);

        return view('admin.verification.show', ['verification' => $verification]);
    }

    public function update(Request $request, $ver_id)
    {
        $this->validate($request, [
            'status'    =>  'required|in:accept,decline'
        ]);

        $verification = UserVerification::find($ver_id);

        if (empty($verification) || $verification->status != 'pending') {
            return redirect()->back()->withErrors('Verification not available.');
        }

        $verification->update([
            'status'        =>  $request->input('status'),
            'auditor_id'    =>  $request->user()->id,
            'audited_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);

        return redirect()->back();
    }
}