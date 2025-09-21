<!-- Vertically centered Modal -->
  <div class="modal fade" id="AddUserModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-file-plus text-success'></i> Add New User</h5>
          <button type="button" onclick="onCloseModal('AddUserForm')" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <span id="form_result"></span>
        <hr>

        <div class="modal-body">
          <form  id="AddUserForm" enctype="multipart/form-data laravel" file="false" class="row g-3 needs-validation" novalidate>
            @csrf

          <!-- Dropdown: Insect or Disease -->
          <div class="mb-3">
            <label for="type" class="form-label">User Type</label>
            <select class="form-select" id="type" name="type" required>
              <option value="" disabled selected>Select type</option>
              <option value="3" class="text-success">Blog User</option>
              {{-- <option value="0" class="text-danger">Unpublish</option> --}}
            </select>
          </div>
            
            <!-- User Name -->
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
            </div>

            <!-- User Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div>

            <!-- User UserName -->
            <div class="mb-3">
              <label for="username" class="form-label">UserName</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>

            <!-- User password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>

            <!-- User password -->
            <div class="mb-3">
              <label for="password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter password confirmation" required>
            </div>

          </form>
        </div>

        <div class="modal-footer">
          <button type="button" onclick="addData()" class="btn btn-sm btn-outline-success addData">ADD</button>
          <button type="reset" onclick="onCloseModal('AddUserForm')" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->