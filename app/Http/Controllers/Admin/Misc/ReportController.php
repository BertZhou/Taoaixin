<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Order;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $reports = Report::all();

        return view('admin.report.index', ['reports' => $reports]);
    }

    public function show(Request $request, $report_id)
    {
        $report = Report::find($report_id);

        if (empty($report)) {
            return redirect()->back()->withErrors('Report not available.');
        }

        return view('admin.report.show', ['report' => $report]);
    }

    public function update(Request $request, $report_id)
    {
        $this->validate($request, [
            'type'      =>  'required|in:success,fail',
            'reason'    =>  'required|string'
        ]);

        $report = Report::where('id', $report_id)->where('type', '<>', 'pending')->first();

        if (empty($report)) {
            return redirect()->back()->withErrors('Report not available.');
        }

        $report->update([
            'type'          =>  $request->input('type'),
            'reason'        =>  $request->input('reason'),
            'auditor_id'    =>  $request->user()->id
        ]);

        return redirect()->back();
    }
}