<?php

namespace App\Http\Controllers\User;

use App\Models\Item;
use App\Models\Order;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $report = Report::where('reporter_id', $request->user()->id)->get();

        return view('user.report.index', ['reports' => $reports]);
    }

    public function show(Request $request, $report_id)
    {
        $report = Report::where(['id' => $report_id, 'reporter_id' => $request->user()->id])->first();

        if (empty($report)) {
            return redirect()->back()->withErrors('Report not available.');
        }

        return view('user.report.show', ['report' => $report]);
    }

    public function create()
    {
        $orders = Order::where('buyer_user_id', $request->user()->id)->where('type', '<>', 'pending')->get();

        return view('user.report.show', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'order_id'  =>  'required|integer|min:0',
            'content'   =>  'required|string'
        ]);

        $order = Order::where(['id' => $request->input('order_id'), 'buyer_user_id' => $request->user()->id])->first();

        if (empty($order)) {
            return redirect()->back()->withErrors('Order not available.');
        }

        $report = Report::create([
            'order_id'      =>  $order->id,
            'reporter_id'   =>  $request->user()->id,
            'content'       =>  $request->input('content'),
            'type'          =>  'pending'
        ]);

        return redirect()->back();
    }
}