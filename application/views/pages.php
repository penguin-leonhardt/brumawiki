<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
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
        <div class="container">
          <div class="columns">
            <div class="column is-1">
              <a href="#" onclick="javascript:window.history.back(-1);return false;">Back</a>
            </div>
            <div class="column is-10">
              <div class="content"><?php echo $content; ?></div>
            </div>
            <div class="column is-1"></div>
          </div>
        </div>
      </div>
      <!-- Hero Body -->
    </section>
  </body>
</html>