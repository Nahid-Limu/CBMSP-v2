<!-- Vertically centered Modal -->
  <div class="modal fade" id="EditMemberModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-edit text-success'></i> Edit Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form id="EditMemberForm" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
          @csrf
          <input type="hidden" id="edit_data_id" name="id">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="edit_name" class="form-label">Name</label>
                <input type="text" id="edit_name" name="name" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_photo" class="form-label">Photo</label>
                {{-- <input type="file" id="edit_photo" class="form-control" accept="image/*"> --}}
                <img src="" class='img-fluid imgPreview' id="edit_photo" style='widows: 70px; height: 70px;'>
                {{-- <img src="assets/img/imagePlaceholder.jpg" class="img-thumbnail" id="photo" alt="Photo" style="max-height: 150px;"> --}}
              </div>
              <div class="col-md-6">
                <label for="edit_nid" class="form-label">NID</label>
                <input type="text" id="edit_nid" name="nid" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_dob" class="form-label">Date of Birth</label>
                <input type="date" id="edit_dob" name="dob" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_father_name" class="form-label">Father's Name</label>
                <input type="text" id="edit_father_name" name="father_name" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_mother_name" class="form-label">Mother's Name</label>
                <input type="text" id="edit_mother_name" name="mother_name" class="form-control" required>
              </div>
              <hr>
              <div class="col-md-6">
                <label for="edit_village" class="form-label">Village</label>
                <input type="text" id="edit_village" name="village" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_union_parishad" class="form-label">Union Parishad</label>
                <input type="text" id="edit_union_parishad" name="union_parishad" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_upazila" class="form-label">Upazila</label>
                <input type="text" id="edit_upazila" name="upazila" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_zila" class="form-label">Zila</label>
                <input type="text" id="edit_zila" name="zila" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_phone" class="form-label">Phone</label>
                <input type="tel" id="edit_phone" name="phone" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_email" class="form-label">Email</label>
                <input type="email" id="edit_email" name="email" class="form-control">
              </div>
              <hr>
              <div class="col-md-6">
                <label for="edit_amount_of_tea_garden" class="form-label">Amount of Tea Garden (in acres)</label>
                <input type="number" id="edit_amount_of_tea_garden" name="amount_of_tea_garden" class="form-control" step="0.01" required>
              </div>
              <div class="col-md-6">
                <label for="edit_tea_garden_address" class="form-label">Tea Garden Address</label>
                <input type="text" id="edit_tea_garden_address" name="tea_garden_address" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_dag_number" class="form-label">Dag Number</label>
                <input type="text" id="edit_dag_number" name="dag_number" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="edit_mouja" class="form-label">Mouja Name</label>
                <input type="text" id="edit_mouja" name="mouja_name" class="form-control" required>
              </div>
            </div>
          </div>
        </form>

        <div class="modal-footer">
          <button type="submit" onclick="updateData()" class="btn btn-outline-success btn-sm">Update</button>
          <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div><!-- End Vertically centered Modal-->