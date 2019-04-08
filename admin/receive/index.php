
<?php
include('../includes/header.php');
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
                        <tr>
                          <td>Size 1</td>
                          <td>400 </td>
                          <td>5</td>
                          <td>61</td>
                          <td>2</td>
                          <td></td>
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
                          <td>Size 2</td>
                          <td>250</td>
                          <td>4</td>
                          <td>63</td>
                          <td>1</td>
                          <td>5</td>
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
                          <td>Size 3</td>
                          <td>500</td>
                          <td>6</td>
                          <td>66</td>
                          <td>5</td>
                          <td></td>
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
                      </tbody>
                    </table>
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