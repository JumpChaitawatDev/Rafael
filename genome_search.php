<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include('head.php'); ?>
  </head>

  <style>
    .card-title{
    color:#ff0017;
    font-size: 1.3rem;
  }
 
  .card .card-body{
    padding-bottom: 0;
    margin-bottom: 0;
  }
  .tab-solid{
    margin-bottom: 0;
  }
  .tab-content-solid{
    border-style: solid;
    border-color: #ff6258;
    border-radius: 8px;
    padding: 50px;
    margin-bottom: 50px;
    margin-top: -3px;
    border-top-width: 5px;
  }
  .tab-solid .nav-item .nav-link{
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .pt-5, .py-5{
    margin-top: 0;
  }
  </style>

  <body class="sidebar-icon-only">
    <div class="container-scroller">
    <?php include('navbar.php'); ?>   
      <div class="container-fluid page-body-wrapper">        
      <?php include('sidebar.php'); ?>    
        <div class="main-panel">
            <div class="content-wrapper">
            <!-- หน้าเว็บ -->
<?php /* ?>
              <div class="row">
                <div class="col-lg-12 grid-margin">
                    <div class="card-body">
                      <h5>Genome Search</h5>
                    </div>
                </div>
              </div>

<?php */ ?>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card" style="padding: 50px;">
                    <h4 class="card-title">Genome Search</h4>
                      <div class="card-body">
                        
                          <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="tab-1" data-toggle="tab" href="#genome-1" role="tab" aria-controls="genome-1" aria-selected="true">Genome 1</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="tab-2" data-toggle="tab" href="#genome-2" role="tab" aria-controls="genome-2" aria-selected="true">Genome 2</a>
                            </li>
                          </ul>
                        </div>
                      
                          <div class="card-body" >
    
                              <div class="tab-content tab-content-solid">

                                <div class="tab-pane fade active show" id="genome-1" role="tabpanel" aria-labelledby="tab-1">

                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Chrom</label>
                                        <div class="col-sm-11">
                                          <select class="form-control">
                                            <option>XXXX</option>
                                            <option>YYYY</option>
                                            <option>ZZZZ</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Alleles</label>
                                        <div class="col-sm-11">
                                          <select class="form-control">
                                            <option>XXXX</option>
                                            <option>YYYY</option>
                                            <option>ZZZZ</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Position</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control"> </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label class="col-sm-1 col-form-label" style="font-size: 20px; padding-right: 0; margin-right: 0;">-</label>
                                        <div class="col-sm-11" style="margin-left: 0; padding-left: 0;">
                                          <input style="margin-left: 0; padding-left: 0;" type="text" class="form-control"> </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <label class="col-sm-1 col-form-label" style="line-height: 30px;">Strand</label>
                                    <div class="col-md-1">
                                      <div class="form-group row">
                                        
                                          <div class="col-sm-12">
                                            <div class="form-radio">
                                              <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="optionsRadios1" id="optionsRadios1" checked> +/- 
                                                  <i class="input-helper"></i>
                                              </label>
                                            </div>
                                          </div>

                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                      <div class="form-group row">
                                          <div class="col-sm-2">
                                            <div class="form-radio">
                                              <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios2"> + 
                                                  <i class="input-helper"></i>
                                              </label>
                                            </div>
                                          </div>
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                      <div class="form-group row">
                                          <div class="col-sm-2">
                                            <div class="form-radio">
                                              <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="optionsRadios3" id="optionsRadios3"> - 
                                                  <i class="input-helper"></i>
                                              </label>
                                            </div>
                                          </div>
                                          
                                        </div>
                                    </div>
                                  </div>
                                  <!-- END Strand -->

                        <div class="mt-5 pt-4 w-75 mx-auto">
                          <div id="soft-limit-3" class="ul-slider slider-danger mb-5 mt-5 noUi-target noUi-ltr noUi-horizontal">
                            <div class="noUi-base">
                              <div class="noUi-origin" style="left: 24%;">
                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="82.0" aria-valuenow="24.0" aria-valuetext="24.00" style="z-index: 5;">
                                  <div class="noUi-tooltip">240.00</div>
                                </div>
                              </div>
                              <div class="noUi-connect" style="left: 24%; right: 18%;"></div>
                              <div class="noUi-origin" style="left: 82%;">
                                <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="24.0" aria-valuemax="100.0" aria-valuenow="82.0" aria-valuetext="82.00" style="z-index: 4;">
                                  <div class="noUi-tooltip">820.00</div>
                                </div>
                              </div>
                            </div>
                            <div class="noUi-pips noUi-pips-horizontal">
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 0%;">0</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 10%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 10%;">100</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 20%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 20%;">200</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 30%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 30%;">300</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 40%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 40%;">400</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 50%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 50%;">500</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 60%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 60%;">600</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 70%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 70%;">700</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 80%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 80%;">800</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 90%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 90%;">900</div>
                              <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div>
                              <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 100%;">999</div>
                            </div>
                          </div>
                        </div>



                                </div>
                              </div>

                            
                          </div> <!-- END Card body -->


                  </div>
                </div>
            </div>

            <!-- END หน้าเว็บ -->
            </div>
         
          
            <?php include('footer.php'); ?> 
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    

    </body>
</html>
<script src="theme/assets/js/shared/dragula.js"></script>