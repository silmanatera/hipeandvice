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
                    <span class="label label-success">456</span>
                  </a>
                  
                </div>

                <div class="col-lg-12">
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
                </div>

                <div class="col-lg-12">
                  <div class="box">
                   <header>
                    <h5>New Product</h5>
                   </header>
                   
                  </div>
                  
                  {{ Form::open(array('url' => 'admin/product/save_product', 'method' => 'post', 'id' => 'popup-validation','class' => 'form-horizontal')) }}
                  <!-- Informacion General del producto-->
                  <div class="box">
                      <header>
                          <h5>General Information</h5>
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
                        <div id="collapse2" class="body" style="margin-top: 4%">
                        
                          <div class="form-group">
                              <label class="control-label col-lg-3">College</label>
                              <div class="col-lg-6">
                                  <select name="college" id="college" class="validate[required] form-control">
                                      <option value="0">Choose a College</option>
                                      <option value="1">Arizona</option>
                                      <option value="2">Berkeley</option>
                                      
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-lg-3">Category</label>
                              <div class="col-lg-6">
                                  <select name="category" id="category" class="validate[required] form-control">
                                      <option value="0">Choose a Category</option>
                                      <option value="1">BODYSUITS</option>
                                      <option value="2">SKIRTS</option>
                                      <option value="3">KNIT TOPS</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-lg-3">Title</label>
                              <div class="col-lg-6">
                                  <input type="text" class="validate[required] form-control" name="title" id="title" value="{{Input::old('title')}}">
                                  @if($errors->has('title'))
                                      @foreach($errors->get('title') as $error)
                                          <label class="control-label texterror"><i class="fa fa-times-circle-o"></i>{{ $error }}</label>
                                      @endforeach
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="short_resume" class="control-label col-lg-3">Short Resume</label>

                              <div class="col-lg-6">
                                  <textarea id="short_resume" name="short_resume" class="form-control"></textarea>
                                  @if($errors->has('short_resume'))
                                      @foreach($errors->get('short_resume') as $error)
                                          <label class="control-label texterror"><i class="fa fa-times-circle-o"></i>{{ $error }}</label>
                                      @endforeach
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="medium_resume" class="control-label col-lg-3">Medium Resume</label>

                              <div class="col-lg-6">
                                  <textarea id="medium_resume" name="medium_resume" class="form-control"></textarea>
                                  @if($errors->has('medium_resume'))
                                      @foreach($errors->get('medium_resume') as $error)
                                          <label class="control-label texterror"><i class="fa fa-times-circle-o"></i>{{ $error }}</label>
                                      @endforeach
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-lg-3">Quantity available ?</label>
                              <div class="col-lg-6">
                                  <input type="text" class="validate[required] form-control" name="quantity" id="quantity" value="{{Input::old('quantity')}}">
                                  @if($errors->has('quantity'))
                                      @foreach($errors->get('quantity') as $error)
                                          <label class="control-label texterror"><i class="fa fa-times-circle-o"></i>{{ $error }}</label>
                                      @endforeach
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-lg-3">Price $</label>
                              <div class="col-lg-6">
                                  <input type="text" class="validate[required] form-control" name="price" id="price" value="{{Input::old('price')}}">
                                  @if($errors->has('price'))
                                      @foreach($errors->get('price') as $error)
                                          <label class="control-label texterror"><i class="fa fa-times-circle-o"></i>{{ $error }}</label>
                                      @endforeach
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-lg-3">Publish?</label>
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="publish_yes" value="1" checked>Yes
                                </label>
                                <label>
                                    <input class="uniform" type="radio" name="publish_no" value="0">No
                                </label>
                            </div>

                          </div>

                          <div class="form-group">
                            <label for="text4" class="control-label col-lg-3">Large Description</label>
                            <div class="col-lg-6">
                              
                                <div class="body">
                                   <textarea id="ckeditor" name="large_resume" class="ckeditor"></textarea>
                                   @if($errors->has('large_resume'))
                                      @foreach($errors->get('large_resume') as $error)
                                          <label class="control-label texterror"><i class="fa fa-times-circle-o"></i>{{ $error }}</label>
                                      @endforeach
                                  @endif
                                </div>
                              
                            </div>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="box">
                      <header>
                          <h5>New School</h5>
                          <div class="toolbar">
                              <div class="btn-group">
                                  <a href="#stripedTable2" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                                      <i class="glyphicon glyphicon-chevron-up"></i>
                                  </a>
                                  <!-- <a class="btn btn-danger btn-sm close-box"><i class="glyphicon glyphicon-remove"></i></a> -->
                              </div>
                          </div>
                      </header>
                      <div id="stripedTable2" class="table-responsive body collapse in">
                        <div id="collapse2" class="body" style="margin-top: 4%">
                            <div class="col-lg-12" style="background:#EBFFFF;border:1px solid darkcyan">
                              <div class="form-group" style="margin-top:2%">
                                <label class="control-label col-lg-3">Color hex format</label>
                                  <div class="col-lg-4">
                                    <!-- <input type="text" class="validate[required] form-control" name="req" id="req"> -->
                                    <input type="text" class="form-control" name="req" id="req">
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-lg-3">Size</label>
                                <div class="checkbox">
                                  <label>
                                    <div class="checker">
                                    <span>
                                      <input class="uniform" value="option2" type="checkbox">
                                    </span>
                                    </div>
                                    Small
                                  </label>
                                  <label>
                                    <div class="checker">
                                    <span>
                                      <input class="uniform" value="option2" type="checkbox">
                                    </span>
                                    </div>
                                    Medium
                                  </label>
                                  <label>
                                    <div class="checker">
                                    <span>
                                      <input class="uniform" value="option2" type="checkbox">
                                    </span>
                                    </div>
                                    Large
                                  </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-lg-3">Photo</label>
                                <div class="col-lg-8">
                                  <input type="file" style="float: left">
                                  <a class="btn btn-danger btn-sm close-box" title="remove school" style="font-size:8px">
                                    <i class="glyphicon glyphicon-remove"></i>
                                  </a>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-lg-3">Photo</label>
                                  <div class="col-lg-8">
                                    <input type="file" style="float: left">
                                    <a class="btn btn-danger btn-sm close-box" title="remove school" style="font-size:8px">
                                      <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-lg-3"></label>
                                  <div class="col-lg-4">
                                    <span style="display:block; text-align: right;">
                                      <a href="#">Another<i class="glyphicon glyphicon-camera" style="padding-left:4px"></i></a>
                                    </span>
                                  </div>
                              </div>
                            
                          </div>

                          <div class="col-lg-12" style="background:#EBFFFF;border:1px solid darkcyan; margin-top: 2%;">
                              <div class="form-group" style="margin-top:2%">
                                <label class="control-label col-lg-3">Color hex format</label>
                                  <div class="col-lg-4">
                                    <!-- <input type="text" class="validate[required] form-control" name="req" id="req"> -->
                                    <input type="text" class="form-control" name="req" id="req">
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-lg-3">Size</label>
                                <div class="checkbox">
                                  <label>
                                    <div class="checker">
                                    <span>
                                      <input class="uniform" value="option2" type="checkbox">
                                    </span>
                                    </div>
                                    Small
                                  </label>
                                  <label>
                                    <div class="checker">
                                    <span>
                                      <input class="uniform" value="option2" type="checkbox">
                                    </span>
                                    </div>
                                    Medium
                                  </label>
                                  <label>
                                    <div class="checker">
                                    <span>
                                      <input class="uniform" value="option2" type="checkbox">
                                    </span>
                                    </div>
                                    Large
                                  </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-lg-3">Photo</label>
                                <div class="col-lg-8">
                                  <input type="file" style="float: left">
                                  <a class="btn btn-danger btn-sm close-box" title="remove school" style="font-size:8px">
                                    <i class="glyphicon glyphicon-remove"></i>
                                  </a>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-lg-3">Photo</label>
                                  <div class="col-lg-8">
                                    <input type="file" style="float: left">
                                    <a class="btn btn-danger btn-sm close-box" title="remove school" style="font-size:8px">
                                      <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-lg-3"></label>
                                  <div class="col-lg-4">
                                    <span style="display:block; text-align: right;">
                                      <a href="#">Another<i class="glyphicon glyphicon-camera" style="padding-left:4px"></i></a>
                                    </span>
                                  </div>
                              </div>
                            
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <span style="display:block; text-align: right;">
                                <a href="#">Another Color<i class="glyphicon glyphicon-leaf" style="padding-left:4px"></i></a>
                              </span>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="box">
                      
                      <div class="table-responsive body">
                            <div id="collapse2" class="body" style="margin-top: 4%">
                            
                                <div class="form-actions no-margin-bottom" style="text-align: right">
                                    <input type="submit" value="Save" name="send" class="btn btn-metis-2 btn-lg btn-grad btn-rect">
                                    <input type="submit" value="Cancel" class="btn btn-metis-1 btn-lg btn-grad btn-rect">
                                </div>
                           
                        </div>
                      </div>
                </div>
                {{ Form::close() }}

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