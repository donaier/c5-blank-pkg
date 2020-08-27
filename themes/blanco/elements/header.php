<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!doctype html>
<html lang="<?php echo Localization::activeLanguage()?>">
  <head>
    <meta charset="UTF-8">
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="<?php echo $view->getStylesheet('styles.less')?>" />
  </head>
<body>
  <div class="<?php echo $c->getPageWrapperClass()?>">
