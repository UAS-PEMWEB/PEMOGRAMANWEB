<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls|max:10240', // Adjust max file size as needed
        ]);

        $file = $request->file('excel_file');
        $filename = 'uploaded_file.' . $file->getClientOriginalExtension();
        
        // Move the file to a storage location
        $file->storeAs('uploads', $filename);

        // Perform any additional logic here, e.g., reading the Excel file

        return redirect()->back()->with('success', 'Excel file uploaded successfully.');
    }
}
