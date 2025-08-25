<!-- Vertically centered Modal -->
  <div class="modal fade" id="ViewMemberModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-show text-success'></i>Member Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <!-- Vertical Form -->
      <form id="ViewMemberForm" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="modal-body">
          <input type="" id="id" name="id" hidden>
          <input type="" id="status" name="status" hidden>
          <div class="row mb-3">
            <div class="col-md-4 text-center">
              <img src="assets/img/imagePlaceholder.jpg" class="img-thumbnail" id="photo" alt="Photo" style="max-height: 150px;">
              <p>
                <strong>Status:</strong> <span id="member_status" ></span> <br>
                <strong>ID:</strong> <span id="mid" >Null</span>
              </p>
            </div>
            <div class="col-md-8">
              <p><strong>Name:</strong> <span id="name"></span></p>
              <p><strong>NID:</strong> <span id="nid"></span></p>
              <p><strong>Date of Birth:</strong> <span id="dob"></span></p>
              <p><strong>Father's name:</strong> <span id="father_name"></span></p>
              <p><strong>Mother's Name:</strong> <span id="mother_name"></span></p>
            </div>
          </div>
  
          <hr>
  
          <div class="row mb-3">
            <div class="col-md-6">
              <p><strong>Village:</strong> <span id="village">e</p>
              <p><strong>Union:</strong> <span id="union_parishad"></p>
              <p><strong>Upazila:</strong> <span id="upazila"></p>
              <p><strong>Zila:</strong> <span id="zila"></p>
            </div>
            <div class="col-md-6">
              <p><strong>Phone:</strong> <span id="phone"></p>
              <p><strong>Email:</strong> <span id="email"></p>
            </div>
          </div>
  
          <hr>
  
          <div class="row">
            <div class="col-md-12">
              <p><strong>Tea Garden Address:</strong> <span id="tea_garden_address"></p>
              <p><strong>Amount of Tea Garden (in acres):</strong> <span id="amount_of_tea_garden"></p>
              <p><strong>Dag Number:</strong> <span id="dag_number"></p>
              <p><strong>Mouja Name:</strong> <span id="mouja_name"></p>
              <p><strong>Tea Board Registration No:</strong> <span id="tea_board_registration_number"></p>
            </div>
          </div>
        </div>
      </form>
      <!-- Vertical Form -->
        
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="approveData()" class="btn btn-outline-success btn-sm" id="accept_btn">Accept</button>
          {{-- <button type="button" class="btn btn-outline-danger btn-sm">Delete</button> --}}
        </div>

      </div>
    </div>
  </div><!-- End Vertically centered Modal-->