<div class="modal fade" id="editApplicationModal-{{ $application->id }}" tabindex="-1" role="dialog" aria-labelledby="editApplicationModalLabel-{{ $application->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editApplicationModalLabel-{{ $application->id }}">Edit Application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="edit-success-message-{{ $application->id }}" class="alert alert-success d-none" role="alert"></div>
                <div id="edit-error-message-{{ $application->id }}" class="alert alert-danger d-none" role="alert"></div>
                <form id="edit-application-form-{{ $application->id }}" action="{{ route('applications.update', $application->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="names-{{ $application->id }}">Full Names</label>
                        <input type="text" name="names" id="names-{{ $application->id }}" class="form-control" value="{{ $application->names }}" required>
                        <p class="text-danger error-names mt-1"></p>
                    </div>
                    <div class="form-group">
                        <label for="phone-{{ $application->id }}">Phone</label>
                        <input type="text" name="phone" id="phone-{{ $application->id }}" class="form-control" value="{{ $application->phone }}" required>
                        <p class="text-danger error-phone mt-1"></p>
                    </div>
                    <div class="form-group">
                        <label for="email-{{ $application->id }}">Email</label>
                        <input type="email" name="email" id="email-{{ $application->id }}" class="form-control" value="{{ $application->email }}" required>
                        <p class="text-danger error-email mt-1"></p>
                    </div>
                    <div class="form-group">
                        <label for="id_number-{{ $application->id }}">ID Number</label>
                        <input type="text" name="id_number" id="id_number-{{ $application->id }}" class="form-control" value="{{ $application->id_number }}" required>
                        <p class="text-danger error-id_number mt-1"></p>
                    </div>
                    <div class="form-group">
                        <label for="department_id-{{ $application->id }}">Department</label>
                        <select name="department_id" id="department_id-{{ $application->id }}" class="form-control" required>
                            <option value="">Select Department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}" {{ $application->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <p class="text-danger error-department_id mt-1"></p>
                    </div>
                    <div class="form-group">
                        <label for="cv-{{ $application->id }}">CV (Optional)</label>
                        <input type="file" name="cv" id="cv-{{ $application->id }}" class="form-control">
                        <p>Current CV: {{ $application->cv ? basename($application->cv) : 'None' }}</p>
                    </div>
                    <div class="form-group">
                        <label for="degree-{{ $application->id }}">Degree (Optional)</label>
                        <input type="file" name="degree" id="degree-{{ $application->id }}" class="form-control">
                        <p>Current Degree: {{ $application->degree ? basename($application->degree) : 'None' }}</p>
                    </div>
                    <div class="form-group">
                        <label for="id_doc-{{ $application->id }}">ID Document (Optional)</label>
                        <input type="file" name="id_doc" id="id_doc-{{ $application->id }}" class="form-control">
                        <p>Current ID Doc: {{ $application->id_doc ? basename($application->id_doc) : 'None' }}</p>
                    </div>
                    <div class="form-group">
                        <label for="province_id-{{ $application->id }}">Province</label>
                        <select name="province_id" id="province_id-{{ $application->id }}" class="form-control" required>
                            <option value="">Select Province</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}" {{ $application->province_id == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                            @endforeach
                        </select>
                        <p class="text-danger error-province_id mt-1"></p>
                    </div>
                    <div class="form-group">
                        <label for="district_id-{{ $application->id }}">District</label>
                        <select name="district_id" id="district_id-{{ $application->id }}" class="form-control" required data-selected="{{ $application->district_id }}">
                            <option value="">Select District</option>
                        </select>
                        <p class="text-danger error-district_id mt-1"></p>
                    </div>
                    <div class="form-group">
                        <label for="sector_id-{{ $application->id }}">Sector</label>
                        <select name="sector_id" id="sector_id-{{ $application->id }}" class="form-control" required data-selected="{{ $application->sector_id }}">
                            <option value="">Select Sector</option>
                        </select>
                        <p class="text-danger error-sector_id mt-1"></p>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Application</button>
                </form>
            </div>
        </div>
    </div>
