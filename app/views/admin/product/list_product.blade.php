@extends ('template_admin')

@section ('content')

 <div id="content">
      <div class="outer">
          <div class="inner bg-light lter">
              <div class="col-lg-12">
                <h1>Hype & Vice Dashboard</h1>

                <!-- Cuando se haga click se filtra por compras aprobadas y rechazadas -->
                <div class="text-center">
                  
                  <a class="quick-btn" href="#" style="font-size: 13px">
                    <i class="glyphicon glyphicon-import"></i>
                    <span>Registered</span>
                    <span class="label label-success">456</span>
                  </a>
                </div>

                <div class="col-lg-12">
                  <div class="box">
                      <header>
                          <h5>Product List</h5>
                          <div class="toolbar">
                              <div class="btn-group">
                                  <a href="#stripedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                                      <i class="glyphicon glyphicon-chevron-up"></i>
                                  </a>
                                  <!-- <a class="btn btn-danger btn-sm close-box"><i class="glyphicon glyphicon-remove"></i></a> -->
                              </div>
                          </div>
                      </header>
                      <div id="stripedTable" class="table-responsive body collapse in">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Price $ </th>
                                    <th>College</th>
                                    <th>Colors</th>
                                    <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>
                                      <a class="user-link" href="">
                                          <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                        </a>
                                    </td>
                                      <td>
                                        SOCALBAE™ BANDEAU TOP
                                      </td>
                                      <td>20</td>
                                      <td>Arizona</td>
                                      <td>
                                        <div style="height:20px;width:20px;background:#C9302C;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#5CB85C;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#D7FFFF;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#286090;margin-left: 2px;float:left"></div>
                                      </td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="edit product">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm close-box" title="unpublish product">
                                          <i class="glyphicon glyphicon-off"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove product">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                      
                                  </tr>

                                  <tr>
                                    <td>
                                      <a class="user-link" href="">
                                          <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                        </a>
                                    </td>
                                      <td>
                                        SOCALBAE™ BANDEAU TOP
                                      </td>
                                      <td>20</td>
                                      <td>Arizona</td>
                                      <td>
                                        <div style="height:20px;width:20px;background:#C9302C;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#5CB85C;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#D7FFFF;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#286090;margin-left: 2px;float:left"></div>
                                      </td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="edit product">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm close-box" title="unpublish product">
                                          <i class="glyphicon glyphicon-off"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove product">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                      
                                  </tr>

                                  <tr>
                                    <td>
                                      <a class="user-link" href="">
                                          <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                        </a>
                                    </td>
                                      <td>
                                        SOCALBAE™ BANDEAU TOP
                                      </td>
                                      <td>20</td>
                                      <td>Arizona</td>
                                      <td>
                                        <div style="height:20px;width:20px;background:#C9302C;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#5CB85C;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#D7FFFF;margin-left: 2px;float:left"></div>
                                        <div style="height:20px;width:20px;background:#286090;margin-left: 2px;float:left"></div>
                                      </td>
                                      <td>
                                        <a class="btn btn-success btn-sm close-box" title="edit product">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm close-box" title="unpublish product">
                                          <i class="glyphicon glyphicon-off"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm close-box" title="remove product">
                                          <i class="glyphicon glyphicon-remove"></i>
                                        </a>
                                      </td>
                                      
                                  </tr>
                              </tbody> 
                          </table>

                          <nav aria-label="Page navigation" style="text-align: center">
                            <ul class="pagination">
                              <li>
                                <a href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li>
                                <a href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.inner -->
      </div>
      <!-- /.outer -->
  </div>
  <!-- /#content -->
</div>

@stop()