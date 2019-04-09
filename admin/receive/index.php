
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
                      $size1TotalDoor1Info = $receiveInfo->size1TotalDoor1();
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
                                echo $size1TotalDoor1Info;
                                ?>
                            </td>
                          <td>
                              <?php
                              $size1ExtraTimber1 = $receiveInfo->size1ExtraTimber1();
                              echo $size1ExtraTimber1;
                              ?>
                          </td>
                          <td rowspan="5" class="text-center">
                             <?php
                             echo $receiveInfo->totalDoor();
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
                                  $size2TotalDoor2Info = $receiveInfo->size2TotalDoor2();
                                  echo $size2TotalDoor2Info;
                                  ?>
                              </td>
                              <td>
                                  <?php
                                  $size2ExtraTimber2 = $receiveInfo->size2ExtraTimber2();
                                  echo $size2ExtraTimber2;
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
                          <td><?php echo $record->size3_qty_3;?> </td>
                          <td><?php echo $record->size3_qty_per_door_3;?> </td>
                              <td>
                                  <?php
                                  $size3TotalDoor3Info = $receiveInfo->size3TotalDoor3();
                                  echo $size3TotalDoor3Info;
                                  ?>
                              </td>
                              <td>
                                  <?php
                                  $size3ExtraTimber3 = $receiveInfo->size3ExtraTimber3();
                                  echo $size3ExtraTimber3;
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
                          <td><?php echo $record->size4_qty_4;?> </td>
                          <td><?php echo $record->size4_qty_per_door_4;?> </td>
                              <td>
                                  <?php
                                  $size4TotalDoor4Info = $receiveInfo->size4TotalDoor4();
                                  echo $size4TotalDoor4Info;
                                  ?>
                              </td>
                              <td>
                                  <?php
                                  $size4ExtraTimber4 = $receiveInfo->size4ExtraTimber4();
                                  echo $size4ExtraTimber4;
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
                        </tr><tr>
                          <td>Size <?php echo $i++;?></td>
                          <td><?php echo $record->size5_qty_5;?> </td>
                          <td><?php echo $record->size5_qty_per_door_5;?> </td>
                              <td>
                                  <?php
                                  $size5TotalDoor5Info = $receiveInfo->size5TotalDoor5();
                                  echo $size5TotalDoor5Info;
                                  ?>
                              </td>
                              <td>
                                  <?php
                                  $size5ExtraTimber5 = $receiveInfo->size5ExtraTimber5();
                                  echo $size5ExtraTimber5;
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