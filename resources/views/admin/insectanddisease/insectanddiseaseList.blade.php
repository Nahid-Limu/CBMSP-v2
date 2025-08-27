@extends('layouts.appAdmin')

@section('title', 'InsectAndDiseaseList')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Insect And Disease List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Insect And Disease</li>
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
                    
                  <h6 class="m-0 font-weight-bold text-primary"><i class='bi bi-person-lines-fill text-success'> Insect And Disease LIST</i></h6>
                    
                  {{-- flash Message --}}
                    <div id="success_message" class="alert alert-success alert-dismissible fade" role="alert"></div>
                  {{-- flash Message --}}

                  <div class="dropdown no-arrow">
                    <button type="button" class="btn btn-sm btn-outline-success " data-bs-toggle="modal"  data-bs-target="#AddInsectAndDiseaseModal"><i class='bx bxs-file-plus'></i> Add Treatment</button>
                  </div>

                </div>

                <!-- Table with stripped rows -->
                <table class="table table-responsive" id="InsectAndDiseaseListTable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Type</th>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Description</th>
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

      @include('admin.insectanddisease.addInsectAndDiseaseModal')
      @include('admin.teacher.editTeaherModal')

      @include('include.admin.deleteModal')

</main><!-- End #main -->

@endsection

@section('script')
<script>

  //Table Data
  $('#InsectAndDiseaseListTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "order": [[ 0, "asc" ]],
        ajax:{
        url: "{{ route('insectAndDiseaseList') }}",
        },
        columns:[
          { 
              data: 'DT_RowIndex', 
              name: 'DT_RowIndex' 
          },
          {
              data: 'type',
              name: 'type'
          },
          {
              data: 'name',
              name: 'name'
          },
          {
              data: 'image',
              name: 'image'
          },
          {
              data: 'description',
              name: 'description'
          },
          {
              data: 'pinned',
              name: 'pinned'
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

    var form = $('#AddInsectAndDiseaseForm')[0];
    var formdata = new FormData(form);
    $.ajax({
            url:"{{ route('insectAndDiseaseAdd') }}",
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

              //success
              if (response.success) {
                
                $("#success_message").text(response.success);
                $('#EvenListTable').DataTable().ajax.reload();
                $('#AddInsectAndDiseaseModal').modal('hide');
                // $("#AddInsectAndDiseaseForm").trigger("reset");
                onCloseModal('AddInsectAndDiseaseForm');
                // alert(response.success);
                SuccessMsg();
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
          url: "{{url('teacherDelete')}}"+"/"+id,
          success: function (response) {
              // console.log(response);
              if (response.success) {
                      
                $("#success_message").text(response.success);
                $('#TeacherListTable').DataTable().ajax.reload();
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
    $("#EditTeacherForm").trigger("reset");
    $.ajax({
        type: 'GET',
        url: "{{url('teacherEdit')}}"+"/"+id,
        // dataType: "html",
        success: function (response) {
            // console.log(response);
            if (response) {
              
              $('#edit_data_id').val(response.id);
              $('#edit_name').val(response.name);
              $('#edit_designation').val(response.designation);
              $('#edit_teachers_words').val(response.teachers_words);
              $("#imageView").attr("src", "assets/img/teachers/"+ response.image);
              
            }

        },error:function(){ 
            console.log(response);
        }
    });
  }

  //Update Table Data
  function updateData(params) {
    // alert();
    var form = $('#EditTeacherForm')[0];
    var formdata = new FormData(form);
    $.ajax({
            url:"{{ route('teacherUpdate') }}",
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
                $('#TeacherListTable').DataTable().ajax.reload();
                $('#EditTeacherModal').modal('hide');
                
                SuccessMsg();
              }
            },
            error: function(response) {
                // console.log(response);
            }
    })
  }

  //Preview an image before Uplode
  $('.uplodeImage').change(function() {
    if (this.files && this.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.imgPreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);
    }
  });
  
</script>
@endsection