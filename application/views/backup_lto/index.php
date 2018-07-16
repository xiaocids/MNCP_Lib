<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1><?= $title; ?></h1>
      </div>
      <div class="col-md-4">
        <div class="btn-group pull-right">
          <a class="btn btn-primary" href="<?php echo site_url('backup_lto/create'); ?>"><i class="fa fa-plus"></i> Tambah</a>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="news" class="container">
   <div class="row">
     <div class="col-md-12">
       
     </div>
   </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
          <table class="table table-bordered table-stripped table-condensed">
              <thead>
                <tr>
                    <th>Aksi</th>
                    <th>No Kaset</th>
                    <th>Tgl Backup</th>
                    <th>Program</th>
                    <th>Judul</th>
                    <th>Episode</th>
                    <th>Nama Folder</th>
                    <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php if (count($data->result()) > 0){ ?>
                <?php foreach ($data->result() as $row) : ?>
                <tr>
                  <td>
                    <a href="<?php echo base_url('backup_lto/edit/'. $row->id); ?>" class="btn btn-sm btn-success" title="Ubah"><i class="fa fa-pencil"></i> Ubah</a>
                    <a href="" class="btn btn-sm btn-danger" title="Ubah"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                  <td><?echo $row->no_kaset; ?></td>
                  <td><?echo $row->tgl_backup; ?></td>
                  <td><?echo $row->program; ?></td>
                  <td><?echo $row->judul; ?></td>
                  <td><?echo $row->episode; ?></td>
                  <td><?echo $row->nama_folder; ?></td>
                  <td><?echo$row->keterangan; ?></td>
                </tr>
                <?php endforeach; ?>
              <?php } else { ?>
                <tr>
                  <td colspan="8" class="no-item">Data tidak ditemukan</td>
                </tr>
            <?php } ;?>
              </tbody>
          </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
