
<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Sarpras') { ?>

    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h3>Daftar Karyawan<small class="text-muted"> </small></h3>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="#" class="back btn btn-rounded"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    
      <section class="card">
        <div class="card-block">
          <table id="tableBarang" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>              
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Option</th>
                
              </tr>
            </thead>
            <tbody>

                  <?php $no=0; foreach ($pic as $dataPic) { $no++; ?>
                     <tr>
                       <td><?php echo $dataPic->nik; ?></td>
                       <td><?php echo $dataPic->karyawan; ?></td>   
                       <td>
                        <a href="<?php echo base_url('data-pic-add/'.$dataPic->nik);?>" class="btn btn-rounded"><i class="fa fa-plus"></i> Select User</a>
                         
                       </td>
                      
                     </tr>
                    
                   <?php } ?>            
            </tbody>
          </table>
        </div>
      </section>


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