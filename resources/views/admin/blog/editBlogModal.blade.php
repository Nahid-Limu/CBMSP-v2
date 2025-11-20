<!-- Vertically centered Modal -->
  <div class="modal fade" id="EditBlogModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-edit text-success'></i> Edit Blog</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form  id="EditBlogForm" enctype="multipart/form-data laravel" file="false" class="row g-3 needs-validation" novalidate>
          @csrf
          <input type="hidden" id="edit_data_id" name="id">

          @if ( auth()->user()->type <=2 )
          
          <!-- Dropdown: Publish or unPublish -->
          <div class="mb-3">
            <label for="edit_is_published" class="form-label">Publish Status</label>
            <select class="form-select" id="edit_is_published" name="is_published" required>
              <option value="" disabled selected>Select type</option>
              <option value="1" class="text-success">Publish</option>
              <option value="0" class="text-danger">Unpublish</option>
            </select>
          </div>
          
          @endif
          
          <!-- Blog Title -->
          <div class="mb-3">
            <label for="edit_title" class="form-label">Title</label>
            <input type="text" class="form-control" id="edit_title" name="title" placeholder="Enter Insect or Disease name" required>
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
            <label for="edit_content" class="form-label">Content</label>
            {{-- <textarea class="form-control" id="description" rows="3" placeholder="Enter description" required></textarea> --}}
            <textarea class="form-control summerNote" name="content" id="edit_content" required cols="20" rows="5" placeholder="Enter description" required></textarea>
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