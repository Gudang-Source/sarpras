<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Sarpras') { ?>


    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h3>Create Acount<small class="text-muted"> </small></h3>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="<?php echo base_url('data-pic-add');?>" class="btn btn-rounded"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    <div class="container-fluid">
        <!-- <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="font-icon font-icon-warning"></i>
            NEWS: You have done 5 actions
        </div> -->

         <?php if($this->session->flashdata('error')){ 
            echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>'
        ;}?>

         <?php if (validation_errors() != '') {echo '<div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>'.validation_errors().'</div><br/>';} ?>

         <?php echo form_open_multipart('data-pic-add/'.$data_pic->nik, array('class' => 'form-horizontal' , 'name' => 'add_name' ,'id' => 'add_name')); ?>
            <div class="box-typical box-typical-padding">

                <h5 class="m-t-lg with-border"><b>Pic</b></h5>

                <div class="row">

                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInputDisabled">NIK</label>
                            <input name="nik" type="text" class="form-control" id="exampleInputDisabled" value="<?php echo $data_pic->nik ?>" >
                            
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInput">Nama</label>
                            <input name="fullname" type="text" class="form-control" id="exampleInput" value="<?php echo $data_pic->karyawan ?>">
                        </fieldset>
                    </div>

                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInputDisabled">E-Mail</label>
                            <input name="email" type="text" class="form-control" id="exampleInputDisabled" value="<?php echo $data_pic->email ?>" >
                            <small class="text-muted">We'll never share your email with anyone else.</small>
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInputDisabled">Role</label>
                            <input name="role" type="text" class="form-control" id="exampleInputDisabled" value="Pic" >
                        </fieldset>
                    </div> 


                    <div class="col-md-4" hidden>
                        
                        <fieldset class="form-group">
                            <label class="form-label semibold"  for="block"> Status Aktif</label><br/>
                            <label class="form-label semibold" >
                                <input type="radio" name="block" id="y" value="y"> Yes
                            </label>
                            <label class="form-label semibold" >
                                <input type="radio" name="block" id="n" value="n" checked=""> No
                            </label>

                        </fieldset>

                    </div>
                        

                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="password ">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" required="" value="<?php echo $data_pic->tanggal_lahir ?>">
                        <small class="help-block"><em>Password Must Be 5 Character</em></small>
                        </fieldset>
                    </div>

                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="password ">Password <span class="text-danger">*</span></label>
                        <input type="password" name="repassword" class="form-control" required="" value="<?php echo $data_pic->tanggal_lahir ?>">
                        <small class="help-block"><em>Re-Password Must Be Match</em></small>
                        </fieldset>
                    </div>

                </div><!--.row-->


                <div class="row">
                    <fieldset class="form-group" style="margin-top: 20px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button data-loading-text="Loading..." class="btn btn-primary"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                
                            <button type="reset" class="btn btn-default" onclick="resetOrderForm()">
                                <i class="glyphicon glyphicon-erase"></i> Reset
                            </button>
                            
                        </div>
                    </fieldset>
                </div>
                
            </div><!--.box-typical-->
            
        <?php echo form_close(); ?> 
    </div><!--.container-fluid-->
        

    
      
<?php }else{ ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>404 Page Not Found</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('backend/dashboard');?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <li class="active">Page not found</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="text-center">
            <span style="font-size: 15em;font-weight: bolder;">404</span>
            <h2 style="margin-top: 0;">You don't have access to this page</h2>
        </div>
    </section>
</div>
<?php } ?>