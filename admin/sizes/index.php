<?php include("../includes/header_link.php");
require_once("Size.php");
$sizeObj = new Size();
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


          <!-- main container -->

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="add_sizes">
              <i class="fas fa-plus fa-sm text-white-50"></i> Add Sizes
            </a>
          </div>


<!--          Size Table-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Sizes Table</h6>
                    </div>
                    <div class="card-body">
                        <?php
                        $sizeInfo = $sizeObj->read();
                        $sizeRecord = $sizeObj->getSize();

                        if ($sizeInfo->num_rows === 0){
                            echo "No Data Found!";
                        }else{
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Sizes</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($record = $sizeInfo->fetch_object()){


                                ?>
                                <tr>
                                    <td><?php echo $record->size;?></td>
                                    <td><?php echo $record->description;?></td>
                                    <td>
                                      <button class="btn btn-sm btn-primary size_edit" data-id="<?php echo $record->id; ?>">Edit</button>
                                      <button data-id="<?php echo $record->id; ?>" class="btn btn-sm btn-danger size_delete">Delete</button>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <?php } ?>
                    </div>
                </div>
                </div>
              
            </div>

<!--         End Size Table-->

          <!--End main container -->

        </div>
        <!-- /.container-fluid -->

        <!-- add sizes Modal -->

        <div class="modal fade" id="sizes_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add sizes</h5>
              <button type="button" class="close size_modal_close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="size_form">
                  <input type="hidden" name="id" id="size_id">
                <div class="form-group row">
                  <label for="size" class="col-sm-3 col-form-label">Size</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="size" name="size">
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
                    <button type="button" class="btn btn-secondary btn-sm mr-1 size_modal_close" data-dismiss="modal">Cancel</button>
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
      $('#add_sizes').on('click', function(){
        $('#sizes_modal').modal('show');
      });

      $('#size_form').on('submit', function () {
         var formData = new FormData(this);

         $.ajax({
             method:'post',
             url:'sizeController.php',
             data:formData,
             processData:false,
             contentType:false,

             success:function (result) {
                 console.log(result);
                 if (result === 'Size Info Save Successfully' || result === 'Size Updated Successfully') {
                  $('.size_modal_close').click();
                     location.reload(true);
                 }
             },
             error:function (xhr) {
                 console.log(xhr);
             }

         });


        return false;
    });

      $('.size_edit').on('click', function(){
      
        var id = $(this).data('id');

        $.ajax({
          method: 'get',
          url: 'sizeController.php',
          data:{
            'id' : id,
            'operation' : 'edit'
          },
          success: function(result){
            console.log(result);
            var sizeInformation = $.parseJSON(result);
            console.log(sizeInformation);
            $('#size_id').val(sizeInformation.id);
            $('#size').val(sizeInformation.size);
            $('#description').val(sizeInformation.description);
            $('#btn_submit').text('Update');
            $('#sizes_modal').modal('show');

          },
          error: function(xhr){
            console.log(xhr);
          }
        });

        return false;

      });

      // Delete
      $('.size_delete').on('click', function () {
          var id = $(this).data('id');
          
            <!-- conformation deleted modals -->
            $('#confirmation_modal').modal('show');
            $('.btn_confirmation').on('click', function (){
            var btnValue = $(this).data('value');
          
          if (btnValue === 'yes') {
             $.ajax({
              method: 'get',
              url: 'sizeController.php',
              data: {
                  'id': id,
                  'operation': 'delete'
              },
              success: function (result) {
                  console.log(result);
                  if (result === 'Size Deleted Successfully') {
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

      $('.size_modal_close').on('click', function () {
        $('#size_id').val('');
        $('#size').val('');
        $('#description').val('');
        $('#btn_submit').text('Save');
        return true;
       });

      </script>


      <!-- Footer -->
     <?php include("../includes/footer.php");?>