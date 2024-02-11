<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Order;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin_dashboard');
    }

    public function generate_report_student()
    {
        $students = Order::query()
            ->select('*')
            ->limit('100')
            ->get();

        $pdf = Pdf::loadView('student_report', compact('students'));

        return $pdf->download(date('Y-m-d') . 'INVOICE.pdf');

        // return view('student_report', compact('students'));
    }
}
