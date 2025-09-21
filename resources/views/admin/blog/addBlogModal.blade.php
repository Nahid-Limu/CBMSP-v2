<!-- Vertically centered Modal -->
  <div class="modal fade" id="AddBlogModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-file-plus text-success'></i> Add New Blog</h5>
          <button type="button" onclick="onCloseModal('AddBlogForm')" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <span id="form_result"></span>
        <hr>

        <div class="modal-body">
          <form  id="AddBlogForm" enctype="multipart/form-data laravel" file="false" class="row g-3 needs-validation" novalidate>
            @csrf
            
            <!-- Blog Title -->
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Enter Blog title" required>
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
                    <img src="assets/img/imagePlaceholder.jpg" class="w-100 imgPreview" id="imgPreview" hidden>
                  {{-- Preview an image before  --}}
                </div>
              </div>
            </div>

            <!-- Description -->
            <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              {{-- <textarea class="form-control" id="description" rows="3" placeholder="Enter description" required></textarea> --}}
              <textarea class="form-control summerNote" name="content" id="content" required cols="20" rows="5" placeholder="Enter content" required></textarea>
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="button" onclick="addData()" class="btn btn-sm btn-outline-success addData">ADD</button>
          <button type="reset" onclick="onCloseModal('AddBlogForm')" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->