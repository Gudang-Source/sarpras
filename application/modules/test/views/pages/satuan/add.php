<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Admin') { ?>



    <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>Add Satuan</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">Satuan</a></li>
                                <li class="active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>
            <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
            <?php echo form_open_multipart('data-satuan-add', array('class' => 'row')); ?>
             
            <div class="box-typical box-typical-padding">

                <div class="row">
                    <div class="col-lg-4">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="exampleInputDisabled">Title Satuan</label>
                            <input name="nama_satuan" type="text" class="form-control" id="exampleInputDisabled" placeholder="Title" >
                            
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