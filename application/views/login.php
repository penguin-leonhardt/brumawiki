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
                <div class="card is-fullwidth">
                  <header class="card-header">
                    <p class="card-header-title">Login</p>
                  </header>
                  <?php echo form_open('/admin/'); ?>
                  <div class="card-content">
                    <div class="content">
                      <p class="control has-icon">
                        <input class="input" type="text" name="userId" placeholder="UserID">
                        <i class="fa fa-envelope"></i>
                      </p>
                      <p class="control has-icon">
                        <input class="input" type="password" name="password" placeholder="Password">
                        <i class="fa fa-lock"></i>
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
                </div>
              </div>
            </div>
            <div class="column is-1"></div>
          </div>
        </div>
      </div>
      <!-- Hero Body -->
    </section>
  </body>
</html>