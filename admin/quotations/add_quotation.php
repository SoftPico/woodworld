
<?php
include('../includes/header.php');
?>


        <!-- /top navigation -->
        <?php include "../includes/sidebar.php";?>
        <!-- page content -->
        <div class="right_col" role="main">
            
       
      <!-- Start Table data 1 -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2 class="text-info">Add Quotations <small class="text-danger">Please fill in the information below. The fields marked with * are required input fields.</small></h2>
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
            <br />
            <form class="form-horizontal form-label-left input_mask">
                
            <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    <label for="">Date <b class="text-danger">*</b></label>
                <input type="date" class="form-control" id="inputSuccess2">
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Reference no.</label>
                <input type="text" class="form-control" id="inputSuccess3">
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Biller <b class="text-danger">*</b></label>
                    <select id="heard" class="form-control" required>
                        <option value="">Choose..</option>
                        <option value="press">Press</option>
                        <option value="net">Internet</option>
                        <option value="mouth">Word of mouth</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    <label for="">Order Tax <b class="text-danger">*</b></label>
                    <select id="heard" class="form-control" required>
                        <option value="">Choose..</option>
                        <option value="press">Press</option>
                        <option value="net">Internet</option>
                        <option value="mouth">Word of mouth</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Discount</label>
                <input type="text" class="form-control" id="inputSuccess3">
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Shipping</label>
                <input type="text" class="form-control" id="inputSuccess3">
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Status <b class="text-danger">*</b></label>
                    <select id="heard" class="form-control" required>
                        <option value="">Choose..</option>
                        <option value="press">Press</option>
                        <option value="net">Internet</option>
                        <option value="mouth">Word of mouth</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Supplier <b class="text-danger">*</b></label>
                    <select id="heard" class="form-control" required>
                        <option value="">Choose..</option>
                        <option value="press">Press</option>
                        <option value="net">Internet</option>
                        <option value="mouth">Word of mouth</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Attach Document</label>
                <input type="file" class="form-control" id="inputSuccess3">
                </div>

                

                <!-- inner information -->
                <div class="row mt-1">
                <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                    <h2><small class="text-danger">Please select these before adding any product</small></h2>
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
                    <br />
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Warehouse <b class="text-danger">*</b></label>
                        <select id="heard" class="form-control" required>
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                        </select>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <label for="">Customer <b class="text-danger">*</b></label>
                        <select id="heard" class="form-control" required>
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                        </select>
                    </div>

                    </div>
                    </div>
                </div>



                </div>


            </div>

                <div class="col-md-10 col-sm-10 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Please add product to order list">
                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                <span class="fa fa-plus form-control-feedback right" aria-hidden="true"></span>
                </div>
                <br>

            
                <!-- table -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="">Order Items <b class="text-danger">*</b></label>
                <div class="x_panel">
                  
                  <div class="x_content">
                    <table class="table table-striped table-bordered">
                      <thead class="bg-primary">
                        <tr>
                          <th>Product(Code-Name)</th>
                          <th>Net Unit Price</th>
                          <th>QTY</th>
                          <th>Discount</th>
                          <th>Product Tax</th>
                          <th>Subtotal(USD)</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>05/04/2019</td>
                          <td>test reference</td>
                          <td>test biller</td>
                          <td>wood world</td>
                          <td>Complete</td>
                          <td>$320,800</td>

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
                          <td>05/04/2019</td>
                          <td>test reference</td>
                          <td>test biller</td>
                          <td>wood world</td>
                          <td>Complete</td>
                          <td>$320,800</td>

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
                          <td>05/04/2019</td>
                          <td>test reference</td>
                          <td>test biller</td>
                          <td>wood world</td>
                          <td>Complete</td>
                          <td>$320,800</td>

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
                          <td>05/04/2019</td>
                          <td>test reference</td>
                          <td>test biller</td>
                          <td>wood world</td>
                          <td>Complete</td>
                          <td>$320,800</td>

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


                <!-- text area -->
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label for="">Note</label>
                    <textarea name="" class="summernote"></textarea>
                </div>

                <!-- end text area -->

                <div class="form-group mt-3">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <button class="btn btn-danger" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>



                </div>


            </div>

            </form>
            </div>
        </div>



        </div>


    </div>
    <br>
    
<?php include "../includes/footer.php";?>