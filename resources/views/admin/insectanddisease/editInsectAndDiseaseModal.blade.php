<!-- Vertically centered Modal -->
  <div class="modal fade" id="EditInsectAndDiseaseModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-edit text-success'></i> Edit InsectAndDisease</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form  id="EditInsectAndDiseaseForm" enctype="multipart/form-data laravel" file="false" class="row g-3 needs-validation" novalidate>
          @csrf
          <input type="hidden" id="edit_data_id" name="id">

          <!-- Dropdown: Insect or Disease -->
          <div class="mb-3">
            <div class="row">
              <div class="col-md-6">
                <label for="type" class="form-label">Type</label>
                <select class="form-select" id="edit_type" name="type" required>
                  <option value="" disabled selected>Select type</option>
                  <option value="insect">Insect</option>
                  <option value="disease">Disease</option>
                </select>
              </div>
              <div class="col-md-6">
                <div class="text-center">
                  <label for="type" class="form-label text-danger">Pinned Status</label>
                  <select class="form-select" id="edit_pinned" name="pinned" required>
                    <option value="" disabled selected>Select type</option>
                    <option value="0" class="text-success">Not Pinned</option>
                    <option value="1" class="text-danger">Pinned</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Disease Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter Insect or Disease name" required>
          </div>

          <!-- Photo Upload -->
          <div class="mb-3">
            
            <div class="row">
              <div class="col-md-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control uplodeImage" name="image" id="edit_image">
              </div>

              <div class="col-md-6">
                <div class="text-center">
                  {{-- Preview an image before  --}}
                  {{-- <img src="" class="w-100 imgPreview" id="imageView" > --}}
                  <img src="" class="img-fluid imgPreview" id="imageView" >
                  {{-- Preview an image before  --}}
                </div>
              </div>
            </div>
          </div>

          <!-- Description -->
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            {{-- <textarea class="form-control" id="description" rows="3" placeholder="Enter description" required></textarea> --}}
            <textarea class="form-control summerNote" name="description" id="edit_description" required cols="20" rows="5" placeholder="Enter description" required></textarea>
          </div>
        </form>
      </div>
        <div class="modal-footer">
          <button type="button" onclick="updateData()" class="btn btn-outline-success btn-sm">Update</button>
          <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->