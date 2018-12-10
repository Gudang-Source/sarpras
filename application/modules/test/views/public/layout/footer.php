

<script src="<?php echo base_url() ?>dist/admin/js/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/tether/tether.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/plugins.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/table-edit/jquery.tabledit.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/app.js"></script>

<script src="<?php echo base_url() ?>dist/admin/js/lib/datatables-net/datatables.min.js"></script>

<script src="<?php echo base_url() ?>dist/admin/js/lib/jqueryui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/lobipanel/lobipanel.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/match-height/jquery.matchHeight.min.js"></script>

<script src="<?php echo base_url() ?>dist/admin/js/lib/bootstrap-table/bootstrap-table.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/bootstrap-table/bootstrap-table-export.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/bootstrap-table/tableExport.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/bootstrap-table/bootstrap-table-init.js"></script>

<script src="<?php echo base_url() ?>dist/admin/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>

<script src="<?php echo base_url() ?>dist/admin/js/lib/summernote/summernote.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                 $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        
        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
  </script>

  <!-- Multi select Dinamis -->
  <script type="text/javascript">

        $(function(){

        $.ajaxSetup({
        type:"POST",
        url: "<?php echo base_url('test/pages/barang/ambil_data') ?>",
        cache: false,
        });

        $("#group").change(function(){

          var value=$(this).val();
          if(value>0){
          $.ajax({
          data:{modul:'subgroup',id:value},
          success: function(respond){
          $("#subgroup").html(respond);
          }
          })
          }

        });

        })
  </script>

  <script>
    $(document).ready(function() {
      $('.summernote').summernote();
    });
    $('.datepicker').datepicker();
  </script>

  <script>
    $(document).ready(function() {
      $('.btn-danger-outline').click(function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        swal({
              title: "Are you sure?",
              text: "Your will not be able to recover this file!",
              type: "warning", 
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Delete",             
              showCancelButton: true,
              cancelButtonClass: "btn-default",
              closeOnConfirm: false
            },
            function(isConfirm){
              if (isConfirm){
                swal("Delete", "File has been Delete", "success");
                window.location.replace(url);
              } else {
                swal("Cancel", "Delete file failed! :)", "error");
              }
              setTimeout(function(){ window.location.replace = url; }, 2000);
            });

      });
      
    });
  </script>
  
  <!-- Tambah Varang -->
  <script type="text/javascript">  
     $(document).ready(function(){  
          var i=1;  
          $('#add').click(function(){  
               i++;  
               $('#dynamic_field').append('<tr id="row'+i+'" name="id'+i+'" ><td ><input type="text" name="nama_barang[]"  autocomplete="off" class="form-control name_list" placeholder="Nama Barang"  required /></td><td > <input type="text" name="jumlah[]"  autocomplete="off" class="form-control" placeholder="Jumlah"  required /></td><td ><select class="form-control select2" style="width: 100%;" name="id_satuan[]" required=""><option>--Pilih Satuan-- </option><?php foreach($satuan as $satuan): ?><option name="id_satuan[] value="<?php echo $satuan['nama_satuan'] ?>" required><?php echo $satuan['nama_satuan'] ?></option><?php endforeach; ?></select></td><td ><input type="text" name="keterangan[]"  autocomplete="off" class="form-control" placeholder="Keterangan"  required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i> Hapus</button></td></tr>'
                );  
          });  
          $(document).on('click', '.btn_remove', function(){  
               var button_id = $(this).attr("id");   
               $('#row'+button_id+'').remove();  
          });  
          $('#submit').click(function(){            
               $.ajax({  
                    url:"<?php echo base_url('test/sistem/entry/entry_barang/'.$this->session->userdata('id_admin')) ?>",  
                    method:"POST",  
                    data:$('#add_name').serialize(),  
                    success:function(data)  
                    {  
                         alert(data);  
                         $('#add_name')[0].reset();  
                    }  
               });  
          });  
     });  
  </script>

  <!-- Datatables Serverside Gudang IT-->
  <script type="text/javascript">

    var tables;

    $(document).ready(function() {

        //datatables
        tables = $('#tableBarangIt').DataTable({ 

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('test/pages/barang/gudang_it_list')?>",
                "type": "POST",
                "data": function ( data ) {
                    data.nama_barang    = $('#nama_barang').val();
                    data.gudang         = $('#gudang').val();
                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],

        });

        
        $('#btn-filter').click(function(){ //button filter event click
            table.ajax.reload();  //just reload table
        });
        $('#btn-reset').click(function(){ //button reset event click
            $('#form-filter')[0].reset();
            table.ajax.reload();  //just reload table
        });



    });

  </script>
  

  <!-- Datatables Serverside Gudang-->
  <script type="text/javascript">

    var tables;

    $(document).ready(function() {

        //datatables
        tables = $('#tableBarangItem').DataTable({ 

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('test/pages/barang/gudang_list')?>",
                "type": "POST",
                "data": function ( data ) {
                    data.nama_barang  = $('#nama_barang').val();
                    data.gudang       = $('#gudang').val();
                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],

        });

        
        $('#btn-filter').click(function(){ //button filter event click
            table.ajax.reload();  //just reload table
        });
        $('#btn-reset').click(function(){ //button reset event click
            $('#form-filter')[0].reset();
            table.ajax.reload();  //just reload table
        });



    });

  </script>
  

  <!-- Datatables Serverside -->
  <script type="text/javascript">

    var table;

    $(document).ready(function() {

        //datatables
        table = $('#tableDataBarang').DataTable({ 

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('test/pages/barang/ajax_list')?>",
                "type": "POST",
                "data": function ( data ) {
                    data.nama_barang  = $('#nama_barang').val();
                    data.nama_group     = $('#nama_group').val();
                    data.nama_subgroup  = $('#nama_subgroup').val();
                    data.tahunajar    = $('#tahunajar').val();
                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],

        });

   
        $('#btn-filter').click(function(){ //button filter event click
            table.ajax.reload();  //just reload table
        });
        $('#btn-reset').click(function(){ //button reset event click
            $('#form-filter')[0].reset();
            table.ajax.reload();  //just reload table
        });

        $('#tableDataBarang').on('click','.delete_record',function(){
          var code=$(this).data('code');
          $('#ModalDelete').modal('show');
          $('[name="id_barang"]').val(code);
        });

    });

  </script>

 


  

  <!-- Image Priview -->
  <script type="text/javascript">
    $(function() {
        $("#file").on("change", function()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
            
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
                
                reader.onloadend = function(){ // set image data as background of div
                    $("#imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });
    });
  </script>


  <!-- Table  -->    
  <script>
    $(function() {

      $('#tablePengajuan').DataTable({
      "order": [0,'desc']});
      $('#tablePengajuanAtk').DataTable({
      "order": [0,'desc']});
      $('#tablePembelian').DataTable({
      "order": [0,'desc']});
      $('#tableBarang').DataTable({
      "order": [0,'desc']});
      $('#tableBarang_Item').DataTable({
      "order": [0,'desc']});
      $('#tableSupplier').DataTable({
      "order": [0,'desc']});
      $('#tableGroup').DataTable({
      "order": [0,'asc']});
      $('#tableSub').DataTable({
      "order": [0,'asc']});
      $('#tableKepsek').DataTable({
      "order": [0,'desc']});
      $('#tableSarpras').DataTable({
      "order": [0,'desc']});
      $('#example').DataTable({
      "order": [0,'desc']});
      
    });
  </script>

  <script>
    $(function(){
      $('#tableDirektur').DataTable({
          responsive: true
        });
    });
  </script>

  <!-- Text Area -->
  <script>
      $(function() {
        autosize($('textarea[data-autosize]'));
      });
  </script>

  <!-- History Back -->
  <script>
      $(".back").click(function(){
          window.history.back();
      });
  </script>

<?php if ($menu=='dashboard') { ?>
    <script>toastr.success('Hello <strong><?php echo $this->session->userdata('username');?></strong>.<br/>Welcome Sistem Pembelian Barang.')</script>
  <?php }elseif ($this->session->flashdata('msg')=='process-success') { ?>
      <script>toastr.success('The process is successful')</script>
  <?php }elseif ($this->session->flashdata('msg-error')=='process-danger') { ?>
      <script>toastr.success('Periksa lagi apa ada yang terlupa')</script>
  <?php }elseif ($this->session->flashdata('msg-error')=='process-danger') { ?>
      <script>toastr.success('Periksa lagi apa ada yang telupa')</script>
  <?php }elseif ($menu=='error404') { ?>
      <script>toastr.success('Page Not Found 404 <br/>Halaman Tidak Ada ')</script>
<?php } ?>

</body>
</html>