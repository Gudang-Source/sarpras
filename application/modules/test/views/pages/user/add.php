<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Admin') { ?>



    <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>ADD USER</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">User</a></li>
                                <li class="active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
        

         <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>

         <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>

         <?php echo form_open_multipart('data-user-add', array('class' => 'form-horizontal' , 'name' => 'add_name' ,'id' => 'add_name')); ?>
            <div class="box-typical box-typical-padding">

                <h5 class="m-t-lg with-border"><b>User</b></h5>

                <div class="row">
                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInputDisabled">NIK</label>
                            <input name="nik" type="text" class="form-control" id="exampleInputDisabled" placeholder="Nik" >
                            
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInput">Full Name</label>
                            <input name="fullname" type="text" class="form-control" id="exampleInput" placeholder="Fullname">
                        </fieldset>
                    </div>

                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInputDisabled">E-Mail</label>
                            <input name="email" type="text" class="form-control" id="exampleInputDisabled" placeholder="E-mail" >
                            <small class="text-muted">We'll never share your email with anyone else.</small>
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInputDisabled">Divisi</label>
                            <input name="divisi" type="text" class="form-control" id="exampleInputDisabled" value="" >
                        </fieldset>
                    </div> 

                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="role">Role <span class="text-danger">*</span></label>
                            <select name="role" class="form-control select2" required="">
                                <option value="">== Select User Role ==</option>
                                <?php if ($this->session->userdata('role') == 'Super Admin') { ?>
                                <option value="Super Admin">Super Admin</option>
                                <?php } ?>
                                <option value="User">User</option>
                                <option value="Sarpras">Sarpras</option>
                                <option value="Direktur">Direktur</option>
                                <option value="Pembelian">Pembelian</option>
                                <option value="Kepsek">Kep.Unit</option>
                                <option value="Toko">Toko</option>
                                <option value="Tu Tk">Tu Tk</option>
                                <option value="Tu Sd">Tu Sd</option>
                                <option value="Tu Smp">Tu Smp</option>
                                <option value="Tu Sma">Tu Sma</option>
                            </select>
                        </fieldset>
                    </div>

                    <div class="col-md-4">
                        
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
                        

                    

                </div><!--.row-->

                <div class="row">
                    

                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="password ">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" required="">
                        <small class="help-block"><em>Password Must Be 5 Character</em></small>
                        </fieldset>
                    </div>

                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="password ">Password <span class="text-danger">*</span></label>
                        <input type="password" name="repassword" class="form-control" required="">
                        <small class="help-block"><em>Re-Password Must Be Match</em></small>
                        </fieldset>
                    </div>
                    

                    
                </div>

                <div class="row">
                    <fieldset class="form-group" style="margin-top: 20px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button data-loading-text="Loading..." class="btn btn-primary"><i class="glyphicon glyphicon-ok-sign"></i> Send</button>
                                
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