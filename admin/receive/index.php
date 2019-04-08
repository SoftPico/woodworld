
<?php
include('../includes/header.php');
require_once '../DBconnection.php';
require_once 'Receive.php';

 $receiveInfo = new Receive();

?>


        <!-- /top navigation -->
        <?php include "../includes/sidebar.php";?>
        <!-- page content -->
        <div class="right_col" role="main">
            
       
      <!-- Start Table data 1 -->
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div>
                    <button id="add_receive" type="button" class="btn btn-success">Add receive</button>
                </div>
                  <div class="x_title">

                    <h2>Model: ww-09 <small>Users</small></h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
                      $receives = $receiveInfo->read();
                      if ($receives->num_rows == 0){
                          echo "No record found";
                      }else {


                      ?>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sizes</th>
                          <th>Total QTY</th>
                          <th>Per Door QTY</th>
                          <th>Total Door(size by)</th>
                          <th>Extra timber</th>
                          <th>Total Door</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php
                      while ($record = $receives->fetch_object()){
                          $i=1;


                      ?>
                        <tr>
                          <td>Size <?php echo $i++;?></td>
                          <td><?php echo $record->size1_qty_1;?> </td>
                          <td><?php echo $record->size1_qty_per_door_1;?> </td>
                            <td>
                                <?php
                                $size1Qty1 = $record->size1_qty_1;
                                $size1Qty1PerDoor1 = $record->size1_qty_per_door_1;
                                $size1TotalDoor1 = (int)($size1Qty1/$size1Qty1PerDoor1);
                                echo $size1TotalDoor1;
                                 $size1ExtraTim1 = $size1Qty1 % $size1Qty1PerDoor1;
                                ?>
                            </td>
                          <td><?php echo $size1ExtraTim1;?></td>
                          <td rowspan="5" class="text-center">
                              <?php
                              echo $test= $size1TotalDoor1;

                              ?>
                          </td>
                          <td>
                            <li role="presentation" class="dropdown list-unstyled">
                              <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Action
                                          <span class="caret"></span>
                                      </a>
                              <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">view</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">edit</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delete</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delivery</a>
                                </li>
                              </ul>
                            </li>
                          </td>
                        </tr>
                          <tr>
                          <td>Size <?php echo $i++;?></td>
                          <td><?php echo $record->size2_qty_2;?> </td>
                          <td><?php echo $record->size2_qty_per_door_2;?> </td>
                              <td>
                                  <?php
                                  $size2Qty2 = $record->size2_qty_2;
                                  $size2Qty2PerDoor2 = $record->size2_qty_per_door_2;
                                  $size2TotalDoor2 = (int)($size2Qty2/$size2Qty2PerDoor2);
                                  echo $size2TotalDoor2;
                                  $size2ExtraTim2 = $size2Qty2 % $size2Qty2PerDoor2;
                                  ?>
                              </td>
                              <td><?php echo $size2ExtraTim2;?></td>

                          <td>
                            <li role="presentation" class="dropdown list-unstyled">
                              <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Action
                                          <span class="caret"></span>
                                      </a>
                              <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">view</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">edit</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delete</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delivery</a>
                                </li>
                              </ul>
                            </li>
                          </td>
                        </tr>
                          <tr>
                          <td>Size <?php echo $i++;?></td>
                          <td><?php echo $record->size3_qty_3;?> </td>
                          <td><?php echo $record->size3_qty_per_door_3;?> </td>
                              <td>
                                  <?php
                                  $size3Qty3 = $record->size3_qty_3;
                                  $size3Qty3PerDoor3 = $record->size3_qty_per_door_3;
                                  $size3TotalDoor3 = (int)($size3Qty3 / $size3Qty3PerDoor3);
                                  echo $size3TotalDoor3;
                                  $size3ExtraTim3 = $size3Qty3 % $size3Qty3PerDoor3;
                                  ?>
                              </td>
                              <td><?php echo $size3ExtraTim3;?></td>

                          <td>
                            <li role="presentation" class="dropdown list-unstyled">
                              <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Action
                                          <span class="caret"></span>
                                      </a>
                              <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">view</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">edit</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delete</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delivery</a>
                                </li>
                              </ul>
                            </li>
                          </td>
                        </tr>
                          <tr>
                          <td>Size <?php echo $i++;?></td>
                          <td><?php echo $record->size4_qty_4;?> </td>
                          <td><?php echo $record->size4_qty_per_door_4;?> </td>
                              <td>
                                  <?php
                                  $size4Qty4 = $record->size4_qty_4;
                                  $size4Qty4PerDoor4 = $record->size4_qty_per_door_4;
                                  $size4TotalDoor4 = (int)($size4Qty4 / $size4Qty4PerDoor4);
                                  echo $size4TotalDoor4;
                                  $size4ExtraTim4 = $size4Qty4 % $size4Qty4PerDoor4;
                                  ?>
                              </td>
                              <td><?php echo $size4ExtraTim4;?></td>

                          <td>
                            <li role="presentation" class="dropdown list-unstyled">
                              <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Action
                                          <span class="caret"></span>
                                      </a>
                              <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">view</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">edit</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delete</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delivery</a>
                                </li>
                              </ul>
                            </li>
                          </td>
                        </tr><tr>
                          <td>Size <?php echo $i++;?></td>
                          <td><?php echo $record->size5_qty_5;?> </td>
                          <td><?php echo $record->size5_qty_per_door_5;?> </td>
                              <td>
                                  <?php
                                  $size5Qty5 = $record->size5_qty_5;
                                  $size5Qty5PerDoor5 = $record->size5_qty_per_door_5;
                                  $size5TotalDoor5 = (int)($size5Qty5 / $size5Qty5PerDoor5);
                                  echo $size5TotalDoor5;
                                  $size5ExtraTim5 = $size5Qty5 % $size5Qty5PerDoor5;
                                  ?>
                              </td>
                              <td><?php echo $size5ExtraTim5;?></td>

                          <td>
                            <li role="presentation" class="dropdown list-unstyled">
                              <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Action
                                          <span class="caret"></span>
                                      </a>
                              <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">view</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">edit</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delete</a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">delivery</a>
                                </li>
                              </ul>
                            </li>
                          </td>
                        </tr>
                      <?php }?>

                      </tbody>
                    </table>
                      <?php }?>
                  </div>
                </div>
              </div>
<!--End Table data 1 -->

        </div>
    <br>

    <!-- modal -->
    <?php include('../Modals/receive_modal.php');?>

    <script language="javascript">
      $('#add_receive').on('click', function(){
        $('#receive_modal').modal('show');
      });

      $('#receive_form').on('submit', function () {

          var receiveData = new FormData(this);

          $.ajax({
             method:'post',
             url:'receiveController.php' ,
              data:receiveData,
              processData:false,
              contentType:false,

              success:function (result) {
                  console.log(result);
                 if (result === 'Receive Info Save Successfully'){
                     location.reload(true);
                 }



              },
              error:function (xhr) {
                  console.log(xhr);
              }
          });

          return false;
      });
      </script>
    
<?php include "../includes/footer.php";?>