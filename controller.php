<?php 

namespace Concrete\Package\Blanco;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use BlockTypeSet;


defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
  protected $pkgHandle = 'blanco'; 
  protected $appVersionRequired = '5.7.5.6';
  protected $pkgVersion = '0.0.1';

  public function getPackageDescription()
  {
    return t("blanco");
  }

  public function getPackageName()
  {
    return t("blanco");
  }

  public function install()
  {
    $pkg = parent::install();
    Theme::add('blanco', $pkg);

    $this->install_single_pages($pkg);
    $this->add_block_type_set($pkg);
  }

  public function uninstall()
  {
    $pkg = parent::uninstall();
  }

  function install_single_pages($pkg)
  {
    // $directoryDefault = SinglePage::add('/dashboard/sample_package/', $pkg);
    // $directoryDefault->update(array('cName' => t('Sample Package'), 'cDescription' => t('Sample Package')));
  }

  function add_block_type_set($pkg) {
    if (!BlockTypeSet::getByHandle('blanco')) {
      BlockTypeSet::add('blanco', 'blanco', $pkg);
    }
  }
}
