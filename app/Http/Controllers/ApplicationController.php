<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^(?:\+250|07)\d{8}$/|unique:job_applications,phone',
            'email' => 'required|email|unique:job_applications,email',
            'id_number' => 'required|string|regex:/^\d{16}$/|unique:job_applications,id_number',
            'department_id' => 'required|exists:departments,id',
            'province_id' => 'required|in:1', // Hardcoded to Kigali City
            'district_id' => 'required|in:1', // Hardcoded to Gasabo
            'sector_id' => 'required|in:1,2,3,4,5', // Hardcoded to Gisozi, Kimihurura, Kacyiru, Remera, Kimironko
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'degree' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'id_doc' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // Handle file uploads
        $filePaths = [];
        foreach (['cv', 'degree', 'id_doc'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $filePaths[$fileField] = $request->file($fileField)->store('applications/' . time(), 'public');
            }
        }

        $data['cv_path'] = $filePaths['cv'] ?? null;
        $data['degree_path'] = $filePaths['degree'] ?? null;
        $data['id_doc_path'] = $filePaths['id_doc'] ?? null;

        JobApplication::create($data);

        return response()->json(['message' => 'Application submitted successfully!']);
    }
}
