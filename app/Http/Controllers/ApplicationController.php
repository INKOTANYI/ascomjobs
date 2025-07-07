<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Department;
use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $applications = Application::with(['department', 'province', 'district', 'sector'])->get();
        $departments = Department::all();
        $provinces = Province::all();

        return view('applications', compact('applications', 'departments', 'provinces'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'phone' => 'required|string|unique:applications,phone|max:15',
            'email' => 'required|email|unique:applications,email|max:255',
            'id_number' => 'required|string|unique:applications,id_number|max:20',
            'department_id' => 'required|exists:departments,id',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'degree' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'id_doc' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'province_id' => 'required|exists:provinces,id',
            'district_id' => 'required|exists:districts,id',
            'sector_id' => 'required|exists:sectors,id',
        ]);

        $data = $request->only(['names', 'phone', 'email', 'id_number', 'department_id', 'province_id', 'district_id', 'sector_id']);

        if ($request->hasFile('cv')) {
            $data['cv'] = $request->file('cv')->store('applications/cvs', 'public');
        }
        if ($request->hasFile('degree')) {
            $data['degree'] = $request->file('degree')->store('applications/degrees', 'public');
        }
        if ($request->hasFile('id_doc')) {
            $data['id_doc'] = $request->file('id_doc')->store('applications/id_docs', 'public');
        }

        $application = Application::create($data);

        return response()->json([
            'success' => true,
            'application' => $application->load(['department', 'province', 'district', 'sector'])
        ]);
    }

    public function update(Request $request, $id)
    {
        $application = Application::findOrFail($id);

        $request->validate([
            'names' => 'required|string|max:255',
            'phone' => 'required|string|unique:applications,phone,' . $application->id . '|max:15',
            'email' => 'required|email|unique:applications,email,' . $application->id . '|max:255',
            'id_number' => 'required|string|unique:applications,id_number,' . $application->id . '|max:20',
            'department_id' => 'required|exists:departments,id',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'degree' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'id_doc' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'province_id' => 'required|exists:provinces,id',
            'district_id' => 'required|exists:districts,id',
            'sector_id' => 'required|exists:sectors,id',
        ]);

        $data = $request->only(['names', 'phone', 'email', 'id_number', 'department_id', 'province_id', 'district_id', 'sector_id']);

        if ($request->hasFile('cv')) {
            if ($application->cv) {
                Storage::disk('public')->delete($application->cv);
            }
            $data['cv'] = $request->file('cv')->store('applications/cvs', 'public');
        }
        if ($request->hasFile('degree')) {
            if ($application->degree) {
                Storage::disk('public')->delete($application->degree);
            }
            $data['degree'] = $request->file('degree')->store('applications/degrees', 'public');
        }
        if ($request->hasFile('id_doc')) {
            if ($application->id_doc) {
                Storage::disk('public')->delete($application->id_doc);
            }
            $data['id_doc'] = $request->file('id_doc')->store('applications/id_docs', 'public');
        }

        $application->update($data);

        return response()->json([
            'success' => true,
            'application' => $application->load(['department', 'province', 'district', 'sector'])
        ]);
    }

    public function destroy($id)
    {
        $application = Application::findOrFail($id);

        if ($application->cv) {
            Storage::disk('public')->delete($application->cv);
        }
        if ($application->degree) {
            Storage::disk('public')->delete($application->degree);
        }
        if ($application->id_doc) {
            Storage::disk('public')->delete($application->id_doc);
        }

        $application->delete();

        return response()->json(['success' => true]);
    }
}
