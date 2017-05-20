<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
$this->load->helper('form');
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_name; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('/asset/css/bulma.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/asset/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/asset/css/style.css'); ?>">
    <script src="<?php echo base_url('/asset/js/marked.min.js'); ?>"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="hero is-info is-bold">
      <!-- Hero Header -->
      <div class="hero-head">
        <header class="nav">
          <div class="container">
            <div class="nav-left">
              <a class="nav-item is-active"><?php echo $site_name; ?>
              </a>
            </div>
          </div>
        </header>
      </div>
    </section>
    <section class='hero'>
      <!-- Hero Header -->
      <!-- Hero Body -->
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="columns">
            <div class="column is-1">
              <a href="#" onclick="javascript:window.history.back(-1);return false;">Back</a>
            </div>
            <div class="column is-10">
              <div class="content">
              <?php if(count($fileList) != 0) { ?>
              <?php echo form_open('/admin/'); ?>
                <div class="card-content">
                  <div class="content">
                    <p class="control has-icon">
                      <input class="input" type="text" name="target" placeholder="FileName">
                      <input type="hidden" name="userId" value="<?php echo $userId ?>">
                      <input type="hidden" name="password" value="<?php echo $password ?>">
                      <i class="fa fa-envelope"></i>
                    </p>
                    <div class="level">
                      <div class="level-left"></div>
                      <div class="level-right">
                        <div class="level-item">
                          <p class="control">
                            <input type="submit" class="button is-success">
                          </p>
                        </div>
                      </div>
                    </d>
                  </div>
                </div>
                <?php echo form_close(); ?>
                <?php echo form_open('/admin/'); ?>
                <table class="table is-striped">
                  <thead>
                    <tr>
                      <th style="width:10%;"></th>
                      <th style="width:80%;">Name</th>
                      <th style="width:10%;"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($fileList as $filename) { ?>
                    <tr>
                      <td><input type="radio" name="target" value="<?php echo $filename ?>"></td>
                      <td><?php echo $filename ?></td>
                      <td><input type="submit" class="button is-primary"></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="width:10%;"></th>
                      <th style="width:80%;">Name</th>
                      <th style="width:10%;"></th>
                    </tr>
                  </tfoot>
                </table>
                <input type="hidden" name="userId" value="<?php echo $userId ?>">
                <input type="hidden" name="password" value="<?php echo $password ?>">
              <?php echo form_close(); ?>
              <?php } ?>
              <?php if($file != '') { ?>
                <?php echo form_open('/admin/'); ?>
                <div class="columns">
                  <div class="column is-6">
                    <textarea rows="30" cols="80" id="data" name="data"><?php echo $file ?></textarea>
                    <input type="hidden" name="target" value="<?php echo $target ?>">
                    <input type="hidden" name="userId" value="<?php echo $userId ?>">
                    <input type="hidden" name="password" value="<?php echo $password ?>">
                  </div>
                  <div class="column is-6">
                    <textarea rows="30" cols="80" id="preview"></textarea>
                  </div>
                </div>
                <td><input type="submit" class="button is-primary"></td>
                <?php echo form_close(); ?>
              <?php } ?>
              </div>
            </div>
            <div class="column is-1"></div>
          </div>
        </div>
      </div>
      <!-- Hero Body -->
    </section>
    <script>
    window.onload = function() {  
    var data = document.querySelector('#data');
    if (typeof(data) == 'undefined' || data == null) return ;
    var preview = document.querySelector('#preview');
    var sync = function() {
      preview.value = marked(data.value);
    };
    data.onblur = sync;
    sync();
  };
  </script>
  </body>
</html>