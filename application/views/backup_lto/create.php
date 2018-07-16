<div class="header">
  <div class="container">
    <h1><?= $title; ?></h1>
  </div>
</div>

<div id="news" class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
          <?php
            if ($this->session->flashdata('errors')){
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('errors');
                echo "</div>";
            }
          ?>

          <?php echo form_open('backup-lto/store', array('class'=>'form-horizontal')); ?>

          <div class="form-group">
            <label for="no_kaset" class="col-md-4 col-sm-6 control-label">No Kaset</label>
            <div class="col-md-8 col-sm-6">
              <input name="no_kaset" type="text" class="form-control" id="no_kaset" placeholder="No Kaset">
            </div>
          </div>

          <div class="form-group">
            <label for="tgl_backup" class="col-md-4 col-sm-6 control-label">Tgl Backup</label>
            <div class="col-md-8 col-sm-6">
              <input name="tgl_backup" autocomplete="off" type="text" class="form-control datepicker" id="tgl_backup" placeholder="DD/MM/YYYY">
            </div>
          </div>

          <div class="form-group">
            <label for="program" class="col-md-4 col-sm-6 control-label">Program</label>
            <div class="col-md-8 col-sm-6">
              <input name="program" type="text" class="form-control" id="program" placeholder="Program">
            </div>
          </div>

          <div class="form-group">
            <label for="judul" class="col-md-4 col-sm-6 control-label">Judul</label>
            <div class="col-md-8 col-sm-6">
              <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul">
            </div>
          </div>

          <div class="form-group">
            <label for="episode" class="col-md-4 col-sm-6 control-label">Episode</label>
            <div class="col-md-8 col-sm-6">
              <input name="episode" type="text" class="form-control" id="episode" placeholder="Episode">
            </div>
          </div>

          <div class="form-group">
            <label for="nama_folder" class="col-md-4 col-sm-6 control-label">Nama Folder</label>
            <div class="col-md-8 col-sm-6">
              <input name="nama_folder" type="text" class="form-control" id="nama_folder" placeholder="Nama Folder">
            </div>
          </div>

          <div class="form-group">
            <label for="keterangan" class="col-md-4 col-sm-6 control-label">Keterangan</label>
            <div class="col-md-8 col-sm-6">
              <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
    </div>

</div>
