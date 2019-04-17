<?php 
  include("../includes/header_link.php");
  include("../sizes/Size.php");

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

          

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="add_wood_name">
              <i class="fas fa-plus fa-sm text-white-50"></i> Add Products
            </button>
          </div>


            <div class="row">
                
            </div>

          <!--End main container -->

        </div>
        <!-- /.container-fluid -->

        <!-- add wood name Modal -->

        <div class="modal fade" id="wood_name_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
              <button type="button" class="close wood_name_modal_close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">

      <!-- test -->
                   
      <INPUT type="button" class="btn btn-success btn-sm" value="+" onclick="addRow('dataTable')" />

      <INPUT type="button" class="btn btn-danger btn-sm" value="-" onclick="deleteRow('dataTable')" />
      <form id="receive_form">
        <input type="hidden" name="id" id="receive_id">
        <table class="table table-stripe">
          <tr>
            <th></th>
            <th>Size</th>
            <th>JM Qty</th>
            <th>BT Qty</th>
            <th>CT Qty</th>
            <th>CG Qty</th>
          </tr>
        </table>
         <TABLE id="dataTable" class="table table-stripe">
            <TR>
              <TD><INPUT type="checkbox" class="form-check-input" name="chk"/></TD>
              <TD>
                <?php
                  $sizeInfo = $sizeObj->read();

                  if ($sizeInfo->num_rows === 0){
                      echo "No Data Found!";
                  }else{
                  ?>
                <SELECT name="size_id" class="form-control" id="size_id">
                  <OPTION value="in">Select Size</OPTION>
                  <?php
                      while($record = $sizeInfo->fetch_object()) { ?>
                        <option value="<?php echo $record->id?>"><?php echo $record->size;?></option>
                     <?php } ?>
                </SELECT>
              <?php } ?>
              </TD>
              <TD><INPUT type="text" class="form-control" name="jm_qty" id="jm_qty" ></TD>
              <TD><INPUT type="text" class="form-control" name="bt_qty" id="bt_qty"></TD>
              <TD><INPUT type="text" class="form-control" name="ct_qty" id="ct_qty"></TD>
              <TD><INPUT type="text" class="form-control" name="cg_qty" id="cg_qty"></TD>
            </TR>
          </TABLE>
          <div class="float-right">
            <button class="btn btn-danger btn-sm">Cancel</button>
            <button class="btn btn-primary btn-sm" id="receive_btn">Save</button>
          </div>
      </form>

              <!-- test -->
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

// receive script
    function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

    function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1) {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }
    // insertion form
    $('#receive_form').on('submit', function(){
      var formInfo = new FormData(this);
      $.ajax({
        method: 'POST',
        url: 'receiveController.php',
        data: formInfo,
        processData: false,
        contentType: false,
        success: function(result){
          console.log(result);
          if (result === 'Receive Info Save Successfully') {
            location.reload(true);
          }

        },
        error: function(xhr){
          console.log(xhr);
        }
      });

      return false;
    });


  </script>


      


      <!-- Footer -->
     <?php include("../includes/footer.php");?>