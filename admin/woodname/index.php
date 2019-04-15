<?php include("../includes/header_link.php");
require_once("Woodname.php");
$woodNames = new Woodname();

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <?php include("../includes/sidebar.php");?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include("../includes/header.php");?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="add_wood_name">
              <i class="fas fa-plus fa-sm text-white-50"></i> Add Wood Name
            </button>
          </div>


<div class="row">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Wood Name Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                      <?php
                                $woodNameInfo = $woodNames->read();
                              

                                if ($woodNameInfo->num_rows === 0){
                                    echo "No Data Found!";
                                }else{
                                ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                      <tr>
                                          <th>Wood Name</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                    <tbody>
                                      <?php
                                while($record = $woodNameInfo->fetch_object()){


                                ?>
                                      <tr>
                                          <td><?php echo $record->wood_name;?></td>
                                          <td><?php echo $record->description;?></td>
                                          <td>
                                            <button class="btn btn-sm btn-primary wood_name_edit" data-id="<?php echo $record->id; ?>">Edit</button>
                                            <button data-id="<?php echo $record->id; ?>" class="btn btn-sm btn-danger wood_name_delete">Delete</button>
                                          </td>
                                      </tr>
                                  <?php }?>
                                    </tbody>
                                </table>
                              <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <!--End main container -->

        </div>
        <!-- /.container-fluid -->

        <!-- add wood name Modal -->

        <div class="modal fade" id="wood_name_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add sizes</h5>
              <button type="button" class="close wood_name_modal_close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="wood_name_form">
                  <input type="hidden" name="id" id="wood_name_id">
                <div class="form-group row">
                  <label for="wood_name" class="col-sm-3 col-form-label">Wood Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="wood_name" name="wood_name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="description" class="col-sm-3 col-form-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>
                </div>

                <div class="row form-group float-right">
                  <div class="col-sm-12">
                    <button type="button" class="btn btn-secondary btn-sm mr-1 wood_name_modal_close" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="btn_submit" class="btn btn-primary btn-sm">Save</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
        <!-- End add sizes Modal -->


          <!-- Modal -->
          <div class="modal fade" id="confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                  <button type="button" class="close" id="confirmation_modal_close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   Do you really want to delete this record?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-info btn_confirmation" data-value="no">No</button>
                  <button type="button" class="btn btn-sm btn-danger btn_confirmation" data-value="yes">Yes</button>
                </div>
              </div>
            </div>
          </div>


      </div>
      <!-- End of Main Content -->

      <script language="javascript">
      $('#add_wood_name').on('click', function(){
        $('#wood_name_modal').modal('show');
      });

      $('#wood_name_form').on('submit', function () {
         var formData = new FormData(this);

         $.ajax({
             method:'post',
             url:'woodNameController.php',
             data:formData,
             processData:false,
             contentType:false,

             success:function (result) {
                 console.log(result);
                 if (result === 'Wood Name Info Save Successfully' || result === 'Wood Name Updated Successfully') {
                  $('.wood_name_modal_close').click();
                     location.reload(true);
                 }
             },
             error:function (xhr) {
                 console.log(xhr);
             }

         });


        return false;
    });

      $('.wood_name_edit').on('click', function(){
      
        var id = $(this).data('id');

        $.ajax({
          method: 'get',
          url: 'woodNameController.php',
          data:{
            'id' : id,
            'operation' : 'edit'
          },
          success: function(result){
            console.log(result);
            var woodNameInformation = $.parseJSON(result);
            console.log(woodNameInformation);
            $('#wood_name_id').val(woodNameInformation.id);
            $('#wood_name').val(woodNameInformation.wood_name);
            $('#description').val(woodNameInformation.description);
            $('#btn_submit').text('Update');
            $('#wood_name_modal').modal('show');

          },
          error: function(xhr){
            console.log(xhr);
          }
        });

        return false;

      });

      // Delete
      $('.wood_name_delete').on('click', function () {
          var id = $(this).data('id');
          
            <!-- conformation deleted modals -->
            $('#confirmation_modal').modal('show');
            $('.btn_confirmation').on('click', function (){
            var btnValue = $(this).data('value');
          
          if (btnValue === 'yes') {
             $.ajax({
              method: 'get',
              url: 'woodNameController.php',
              data: {
                  'id': id,
                  'operation': 'delete'
              },
              success: function (result) {
                  console.log(result);
                  if (result === 'Wood Name Deleted Successfully') {
                      location.reload(true);
                  }
              },
              error: function (xhr) {
                  console.log(xhr);
              }
            });

          } else {
            $('#confirmation_modal_close').click();
          }
        });
          return false;
      });


      $('.wood_name_modal_close').on('click', function () {
        $('#wood_name_id').val('');
        $('#wood_name').val('');
        $('#description').val('');
        $('#btn_submit').text('Save');
        return true;
       });

      </script>


      <!-- Footer -->
     <?php include("../includes/footer.php");?>