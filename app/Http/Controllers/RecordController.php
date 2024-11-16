<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Record;

class RecordController extends Controller
{
    // Show form
    public function create()
    {
        return view('form');
    }

    // Store data
    public function store(Request $request)
    {
        $record = Record::create($request->all());

        return redirect()->route('generate.pdf', $record->id);
    }

    // Generate PDF
    public function generatePDF($id)
    {
        $record = Record::findOrFail($id);
        
        $pdf = PDF::loadView('pdf', compact('record'));
        return $pdf->download('record.pdf');
    }
}
