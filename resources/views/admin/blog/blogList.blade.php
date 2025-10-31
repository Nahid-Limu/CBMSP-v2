@extends('layouts.appAdmin')

@section('title', 'Blog List')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Blog</li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    
                  <h6 class="m-0 font-weight-bold text-primary"><i class='bi bi-person-lines-fill text-success'> Blog LIST</i></h6>
                    
                  {{-- flash Message --}}
                    <div id="success_message" class="alert alert-success alert-dismissible fade" role="alert"></div>
                  {{-- flash Message --}}

                  <div class="dropdown no-arrow">
                    <button type="button" class="btn btn-sm btn-outline-success " data-bs-toggle="modal"  data-bs-target="#AddBlogModal"><i class='bx bxs-file-plus'></i> Add New Blog</button>
                  </div>

                </div>

                <!-- Table with stripped rows -->
                <table class="table table-responsive" id="BlogListTable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Image</th>
                      <th scope="col">Content</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

      @include('admin.blog.addBlogModal')
      @include('admin.blog.editBlogModal')

      @include('include.admin.deleteModal')

</main><!-- End #main -->

@endsection

@section('script')
<script>

  //Table Data
  $('#BlogListTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 0, "asc" ]],
        ajax:{
          url: "{{ route('blogList') }}",
        },
        columns:[
          { 
              data: 'DT_RowIndex', 
              name: 'DT_RowIndex' 
          },
          {
              data: 'title',
              name: 'title'
          },
          {
              data: 'image',
              name: 'image'
          },
          {
              data: 'content',
              name: 'content'
          },
          {
              data: 'is_published',
              name: 'is_published'
          },
          {
              data: 'action',
              name: 'action',
              orderable: false
          }
        ]
  });

  //Add Table Data
  function addData() {

    $('.addData').prop('disabled', true).html('Processing...'); // Disable and change text of button

    var form = $('#AddBlogForm')[0];
    var formdata = new FormData(form);
    $.ajax({
            url:"{{ route('blogAdd') }}",
            method:"POST",
            data:formdata,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
              console.log(response.errors);

              // validation
              var html = '';
              if(response.errors)
              {
                html = '<div class="alert alert-danger">';
                for(var count = 0; count < response.errors.length; count++)
                {
                html += '<p>' + response.errors[count] + '</p>';
                }
                html += '</div>';
                
              }
              $('#form_result').html(html);
              $('.addData').prop('disabled', false).html('ADD'); //enable and change text of button

              //success
              if (response.success) {
                
                $("#success_message").text(response.success);
                $('#BlogListTable').DataTable().ajax.reload();
                $('#AddBlogModal').modal('hide');
                // $("#AddInsectAndDiseaseForm").trigger("reset");
                onCloseModal('AddBlogForm');
                // alert(response.success);
                SuccessMsg();

                $('.addData').prop('disabled', false).html('ADD'); //enable and change text of button
              }

            },
            error: function(response) {
                // console.log(response);
            }
    })

  }

  //Delete Table Data
  function deleteTableData(id) {
      // alert(121);
      $.ajax({
          type: 'GET',
          url: "{{url('blogDelete')}}"+"/"+id,
          success: function (response) {
              // console.log(response);
              if (response.success) {
                      
                $("#success_message").text(response.success);
                $('#BlogListTable').DataTable().ajax.reload();
                $('#DeleteModal').modal('hide');

                SuccessMsg();
              }

          },error:function(){ 
              console.log(response);
          }
      });
  }

  //Edit Table Data
  function editData(id) {
    // alert(id);
    $("#EditBlogForm").trigger("reset");
    $.ajax({
        type: 'GET',
        url: "{{url('blogEdit')}}"+"/"+id,
        // dataType: "html",
        success: function (response) {
            // console.log(response);
            if (response) {
              
              $('#edit_data_id').val(response.id);

              $('#edit_is_published').val(response.is_published).attr("selected", "selected");
              $('#edit_title').val(response.title);
              $('#edit_content').summernote('code', response.content);

              $('.imgPreview').attr('hidden', false);
              $("#imageView").attr("src", "assets/img/blog/"+ response.image);
              
            }

        },error:function(){ 
            console.log(response);
        }
    });
  }

  //Update Table Data
  function updateData(params) {
    // alert();
    var form = $('#EditBlogForm')[0];
    var formdata = new FormData(form);
    $.ajax({
            url:"{{ route('blogUpdate') }}",
            method:"POST",
            data:formdata,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
              // console.log(response);
              if (response.success) {
                
                $("#success_message").text(response.success);
                $('#BlogListTable').DataTable().ajax.reload();
                $('#EditBlogModal').modal('hide');
                
                SuccessMsg();
              }
            },
            error: function(response) {
                // console.log(response);
            }
    })
  }
  
</script>
@endsection