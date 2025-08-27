<!-- Vertically centered Modal -->
  <div class="modal fade" id="AddInsectAndDiseaseModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-file-plus text-success'></i> Add Treatment</h5>
          <button type="button" onclick="onCloseModal('AddInsectAndDiseaseForm')" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <span id="form_result"></span>
        <hr>

      <div class="modal-body">
        <form  id="AddInsectAndDiseaseForm" enctype="multipart/form-data laravel" file="false" class="row g-3 needs-validation" novalidate>
          @csrf
          <!-- Dropdown: Insect or Disease -->
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" id="type" name="type" required>
              <option value="" disabled selected>Select type</option>
              <option value="insect">Insect</option>
              <option value="disease">Disease</option>
            </select>
          </div>
          
          <!-- Disease Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Insect or Disease name" required>
          </div>

          <!-- Photo Upload -->
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <div class="row">
              <div class="col-md-6">
                <input type="file" class="form-control uplodeImage" name="image" id="image" accept="image/*" required>
              </div>
              <div class="col-md-6">
                {{-- Preview an image before  --}}
                  <img src="assets/img/imagePlaceholder.jpg" class="w-100 imgPreview" style="padding-bottom: 18px; width: 266px; height: 190px;" id="imgPreview" hidden>
                {{-- Preview an image before  --}}
              </div>
            </div>
          </div>

          <!-- Description -->
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            {{-- <textarea class="form-control" id="description" rows="3" placeholder="Enter description" required></textarea> --}}
            <textarea class="form-control summerNote" name="description" id="description" required cols="20" rows="5" placeholder="Enter description" required></textarea>
          </div>
        </form>
      </div>

        <div class="modal-footer">
          <button type="reset" onclick="onCloseModal('AddInsectAndDiseaseForm')" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="addData()" class="btn btn-sm btn-outline-success">ADD</button>

        </div>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->