<?php

namespace App\Http\Controllers\Business;

use App\Models\Item;
use App\Models\Order;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::where('seller_user_id', $request->user()->id)->get();
        $reports = Report::whereIn('order_id', $orders->lists('id'))->get();

        return 'to be continue.';
    }

    public function show(Request $request, $report_id)
    {
        $orders = Order::where('seller_user_id', $request->user()->id)->get();
        $report = Report::where('id', $report_id)->whereIn('order_id', $orders->lists('id'))->first();

        if (empty($report)) {
            return redirect()->back()->withErrors('Report not available.');
        }

        return view('business.report', ['report' => $report]);
    }
}