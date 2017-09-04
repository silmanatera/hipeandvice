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
                    <i class="glyphicon glyphicon-tower"></i>
                    <span>Registered</span>
                    <span class="label label-success">{{College::get_total_registered()}}</span>
                  </a>
                  
                </div>

                <div class="col-lg-12">
                  <div class="box">
                      <header>
                          <h5>New College</h5>
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
                            <p>
                                @if(Session::get('danger'))
                                    <div id="danger" class="alert alert-danger">
                                      <strong>¡Error! </strong>{{Session::get('danger')}}
                                    </div>
                                @endif
                            </p> 
                            <p>
                                @if(Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                      <strong>¡Success! </strong>{{Session::get('success')}}
                                    </div>
                                @endif
                            </p> 
                            <div id="collapse2" class="body" style="margin-top: 4%">
                            {{ Form::open(array('url' => '/admin/college/register', 'files' => true, 'class' => 'form-horizontal', 'id' => 'popup-validation', 'method' => 'post')) }}
                              
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="validate[required] form-control" name="name" id="req">
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Photo</label>
                                    <div class="col-lg-8"><input type="file" name="photo"></div>
                                </div>

                                <div class="form-actions no-margin-bottom" style="text-align: right">
                                    <input type="submit" value="Save" class="btn btn-metis-2 btn-lg btn-grad btn-rect">
                                    <input type="button" onclick="window.open('<?=URL::to("/admin/")?>','_top');" value="Cancel" class="btn btn-metis-1 btn-lg btn-grad btn-rect">
                                </div>
                            {{Form::close()}}
                        </div>
                      </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.inner -->
      </div>
      <!-- /.outer -->
  </div>

@stop()
