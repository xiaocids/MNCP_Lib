<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url() ?>">Bank Data</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="<?php echo active_link('/'); ?>"><a href="<?= base_url() ?>">Home</a></li>
                <li class="<?php echo active_link('backup_lto'); ?>"><a href="<?= base_url('backup_lto')?>">Backup LTO</a></li>
                <li class="<?php echo active_link('faq'); ?>"><a href="<?= base_url('faq') ?>">FAQ</a></li>
                <li class="<?php echo active_link('about'); ?>"><a href="<?= base_url('about') ?>">About</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
