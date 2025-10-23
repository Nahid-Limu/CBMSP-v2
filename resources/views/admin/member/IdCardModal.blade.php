<!-- Vertically centered Modal -->
  <div class="modal fade" id="IdCardModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow">
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-id-card text-success'></i>Member ID Card</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Vertical Form -->
        <input type="hidden" id="member_name" >
        <div class="modal-body p-4" id="printableDiv" >
          <!-- User ID Card -->
          <div class="id-card mt-3">
            <img src="" id="idCard_photo" alt="User Photo" class="user-photo">
            <h5 id="idCard_Name"></h5>
            <p class="mb-1">Member ID: <strong id="idCard_id"></strong></p>
            <p class="info mb-1" >Phone: <span id="idCard_phone"></span></p>
            <p class="info mb-1" >Email: <span id="idCard_email"></span></p>
            {{-- <p class="info mb-0" >Role: Senior Developer</p> --}}

            <div class="association-footer mt-3">
              <p class="mb-0">Tea Garden Owners Association, Panchagarh</p>
              <p class="mb-0">Emma Shopping Center (2nd Flor), Panchagarh Bazar, Panchagarh</p>
              <p class="mb-0">Contact: contact@cbmspg.com | +880 1737-369190</p>
              <p class="mb-0">WebSite: www.cbmspg.com </p>
            </div>
          </div>
        </div>
      <!-- Vertical Form -->
        
        <div class="modal-footer">
          <button type="button" onclick="printIdCard($('#member_name').val())" class="btn btn-outline-success btn-sm" id="printIdCard_btn">Download ID Card</button>
          {{-- <button type="button" class="btn btn-outline-danger btn-sm">Delete</button> --}}
          <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div><!-- End Vertically centered Modal-->