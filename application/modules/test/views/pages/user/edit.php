 <?php if ($this->session->userdata('role') == 'Super Admin') { ?>

        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>EDIT USER</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">User</a></li>
                                <li class="active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

         <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>

         <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>

         <?php echo form_open_multipart('data-user-edit/'.$user->id_admin, array('class' => 'form-horizontal' , 'name' => 'add_name' ,'id' => 'add_name')); ?>
            <div class="box-typical box-typical-padding">

                <h5 class="m-t-lg with-border"><b>User</b></h5>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="nik">NIK <span class="text-danger">*</span></label>
                                    <input type="text" name="nik" class="form-control" value="<?php echo $user->nik;?>" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="username">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $user->username;?>" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="divisi">Divisi <span class="text-danger">*</span></label>
                                    <input readonly type="text" name="divisi" class="form-control" value="<?php echo $user->divisi;?>" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $user->email;?>" required="" >
                                </div>
                            </div>
                           
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="role">Role <span class="text-danger">*</span></label>
                                    <?php if ($user->role == 'Super Admin') {$selRoleSA = 'selected';}
                                        elseif($user->role == 'Sarpras'){$selRoleSP = 'selected';}
                                        elseif($user->role == 'User'){$selRoleU = 'selected';}
                                        elseif($user->role == 'Direktur'){$selRoleD = 'selected';}
                                        elseif($user->role == 'Pembelian'){$selRoleP = 'selected';} 
                                        elseif($user->role == 'Kepsek'){$selRoleK = 'selected';}
                                         elseif($user->role == 'Toko'){$selRoleT = 'selected';} ?>
                                    <select name="role" class="form-control select2" required="">
                                        <option value="">== Select User Role ==</option>
                                        
                                        <option value="Super Admin" <?php echo $selRoleSA;?>>Super Admin</option>
                                        
                                        <option value="Sarpras" <?php echo $selRoleSP;?>>Sarpras</option>
                                        <option value="Direktur" <?php echo $selRoleD;?>>Direktur</option>
                                        <option value="Pembelian" <?php echo $selRoleP;?>>Pembelian</option>
                                        <option value="User" <?php echo $selRoleU;?>>User</option>
                                        <option value="Kepsek" <?php echo $selRoleK;?>>Kepsek</option>
                                        <option value="Toko" <?php echo $selRoleT;?>>Toko</option>
                                    </select>
                                </div>
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
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" required="">
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="repassword">Re-type Password <span class="text-danger">*</span></label>
                                    <input type="password" name="repassword" class="form-control" required="">
                                    
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <hr>
                                <p class="text-danger">* Required</p>
                                <button type="submit" class="btn btn-primary btn-flat">Edit</button>
                            </div>
                </div>
                
            </div><!--.box-typical-->
            
        <?php echo form_close(); ?> 

        </div><!--.container-fluid-->
    
<?php } else { ?>
    
        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>EDIT USER</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">User</a></li>
                                <li class="active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

         <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>

         <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>

         <?php echo form_open_multipart('backend/pages/user/edituser/'.$user->id_admin, array('class' => 'form-horizontal' , 'name' => 'add_name' ,'id' => 'add_name')); ?>
            <div class="box-typical box-typical-padding">

                <h5 class="m-t-lg with-border"><b>User</b></h5>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="nik">NIK <span class="text-danger">*</span></label>
                                    <input type="text" name="nik" class="form-control" value="<?php echo $user->nik;?>" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="username">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $user->username;?>" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="divisi">Divisi <span class="text-danger">*</span></label>
                                    <input readonly type="text" name="divisi" class="form-control" value="<?php echo $user->divisi;?>" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $user->email;?>" required="" >
                                </div>
                            </div>
                           
                                                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" required="">
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="repassword">Re-type Password <span class="text-danger">*</span></label>
                                    <input type="password" name="repassword" class="form-control" required="">
                                    
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <hr>
                                <p class="text-danger">* Required</p>
                                <button type="submit" class="btn btn-primary btn-flat">Edit</button>
                            </div>
                </div>
                
            </div><!--.box-typical-->
            
        <?php echo form_close(); ?> 

        </div><!--.container-fluid-->
   
<?php } ?>

        