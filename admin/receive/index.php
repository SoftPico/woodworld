<?php 
  include("../includes/header_link.php");
  include("Receive.php");
  $connect = new PDO("mysql:host=localhost;dbname=woodworld", "root", "");


function fill_unit_select_box($connect)
{
    $output = '';
    $query = "SELECT * FROM sizes";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
        $output .= '<option value="'.$row["id"].'">'.$row["size"].'</option>';
    }
    return $output;
}

$receObj = new Receive();


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
          <button class="btn btn-success btn-sm" id="add_receive"><i class="fa fa-plus"></i> Add Receive</button>

          <!-- table -->
          <table class="table table-hover mt-5">
            <?php
                $receiveInfo = $receObj->read();

                if ($receiveInfo->num_rows === 0){
                    echo "No Data Found!";
                }else{
                ?>
            <thead>
              <tr>
                <th scope="col">Sizes</th>
                <th scope="col">JM QTY</th>
                <th scope="col">BT QTY</th>
                <th scope="col">CT QTY</th>
                <th scope="col">CG QTY</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  while($record = $receiveInfo->fetch_object()){

                  ?>
              <tr>
                <th scope="row"><?php echo $record->size;?></th>
                <td><?php echo $record->jm_qty;?></td>
                <td><?php echo $record->bt_qty;?></td>
                <td><?php echo $record->ct_qty;?></td>
                <td><?php echo $record->cg_qty;?></td>
                <td>
                  <button class="btn btn-info btn-sm">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          <?php }?>
          </table>
          <!-- table end -->
          <!-- Modal -->
          <div class="modal fade" id="receive_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 1000px;">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Receive Information</h5>
                  <button type="button" class="close size_modal_close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" id="insert_form">
                        <div class="table-repsonsive">
                            <span id="error"></span>
                            <table class="table table-bordered" id="item_table">
                                <tr>
                                    <th style="width: 170px;">Select Size</th>
                                    <th>JM Qty</th>
                                    <th>BT Qty</th>
                                    <th>CT qty</th>
                                    <th>CG Qty</th>
                                    <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="fa fa-plus"></span></button></th>
                                </tr>
                            </table>
                            <div align="right">
                                <button type="button" class="btn btn-danger btn-sm size_modal_close" data-dismiss="modal">Cancel</button>
                                <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save" />
                            </div>
                        </div>
                    </form>
                </div>
                  
                  
              </div>
            </div>
          </div>

          <!--End main container -->

        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->

     <script>
      $('#add_receive').on('click', function(){
        $('#receive_modal').modal('show');
      });
    $(document).ready(function(){

        $(document).on('click', '.add', function(){
            var html = '';
            html += '<tr>';
            html += '<td><select name="size_id[]" id="size_id" class="form-control size_id"><option value="">Select Size</option><?php echo fill_unit_select_box($connect); ?></select></td>';
            html += '<td><input type="number" name="jm_qty[]" id="jm_qty" class="form-control jm_qty" /></td>';
            html += '<td><input type="text" name="bt_qty[]" id="bt_qty" class="form-control bt_qty" /></td>';
            html += '<td><input type="text" name="ct_qty[]" id="ct_qty" class="form-control ct_qty" /></td>';
            html += '<td><input type="text" name="cg_qty[]" id="cg_qty" class="form-control cg_qty" /></td>';
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
            $('#item_table').append(html);
        });

        $(document).on('click', '.remove', function(){
            $(this).closest('tr').remove();
        });


        $('#insert_form').on('submit', function(event){
            event.preventDefault();
            var error = '';
            $('.jm_qty').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter JM Quantity at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.bt_qty').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter BT Quantity at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.ct_qty').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter CT Quantity at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.cg_qty').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter CG Quantity at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.size_id').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Select Unit at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });
            var form_data = $(this).serialize();
            if(error == '')
            {
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                        console.log(data);
                        if(data == 'ok')
                        {
                            $('#item_table').find("tr:gt(0)").remove();
                            $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
                            location.reload(true);
                        }
                    }
                });
            }
            else
            {
                $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }
        });

    });

     $('.size_modal_close').on('click', function () {
        $('#size_id').val('');
        $('#jm_qty').val('');
        $('#bt_qty').val('');
        $('#ct_qty').val('');
        $('#cg_qty').val('');
        $('#btn_submit').text('Save');
        location.reload(true);
        return true;
       });
</script>


      


      <!-- Footer -->
     <?php include("../includes/footer.php");?>