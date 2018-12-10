    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Pengajuan Service / Maintance</h2>
              <div class="subtitle">Entry / Service-maintance </div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a class="back btn btn-primary btn-flat btn-xs"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    <div class="container-fluid">
      <div class="row">

        <div class="col-xxl-12 col-lg-12 col-xl-8 col-md-8">
          <section class="box-typical proj-page">

            <section class="proj-page-section proj-page-header">
              
              <div class="tbl proj-page-team">
                <div class="tbl-row">
                  <div class="title">
                    Form Service / Maintance
                    <i class="font-icon font-icon-pencil"></i>
                  </div>
                  <div class="tbl-cell tbl-cell-date"><?php echo date('l, d-M-Y ') ?></div>
                </div>
              </div>
            </section><!--.proj-page-section-->

            <section class="proj-page-section">
              <div class="row">
                <div class="col-lg-4">
                  <fieldset class="form-group">
                    <label class="form-label semibold" for="exampleInput">First Name</label>
                    <input readonly="" type="text" class="form-control" id="exampleInput" placeholder="First Name">
                    <!-- <small class="text-muted">We'll never share your email with anyone else.</small> -->
                  </fieldset>
                </div>
                <div class="col-lg-4">
                  <fieldset class="form-group">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="mail@mail.com">
                  </fieldset>
                </div>
                <div class="col-lg-4">
                  <fieldset class="form-group">
                    <label class="form-label semibold" for="exampleInput">Unit</label>
                    <input type="text" class="form-control" id="exampleInput" placeholder="First Name">
                  </fieldset>
                </div>
              </div>
            </section><!--.proj-page-section-->

            <section class="proj-page-section">
              <form>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Tanggal Pengajuan</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><input type="text" readonly="" class="form-control" id="inputPassword" placeholder="<?php echo date('l, d-M-Y') ?>"></p>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">No. Inventaris</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="No. Inventaris"></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Text Disabled</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><input type="text" disabled="" class="form-control" id="inputPassword" placeholder="Text Disabled"></p>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 form-control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div> 
                </div>
                <div class="form-group row">
                  <label for="exampleSelect" class="col-sm-2 form-control-label">Select</label>
                  <div class="col-sm-10">
                    <select id="exampleSelect" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleSelect" class="col-sm-2 form-control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea rows="4" class="form-control" placeholder="Keterangan"></textarea>
                  </div>
                </div>
              </form>
            </section>


            

            <section class="proj-page-section">
              <div class="proj-page-main-controls">
                <div class="proj-page-main-controls-left">
                  <a href="" class="btn btn-md btn-warning">Cancel</a>
                  
                </div>
                <div class="proj-page-main-controls-right">
                  <a href="" class="btn btn-md btn-warning">Cancel</a>
                  <a href="" class="btn btn-md btn-primary  "><i class="fa fa-send"></i> Send</a>
                </div>
              </div>
            </section>

          </section><!--.proj-page-->

        </div>

    </div><!--.container-fluid-->