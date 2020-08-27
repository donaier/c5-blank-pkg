<?php
namespace Concrete\Package\Blanco\Theme\Blanco;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

  public function registerAssets()
  {
    $this->requireAsset('javascript', 'jquery');
    $this->requireAsset('javascript', 'picturefill');
    $this->requireAsset('javascript-conditional', 'html5-shiv');
    $this->requireAsset('javascript-conditional', 'respond');
  }

  protected $pThemeGridFrameworkHandle = 'bootstrap3';

  public function getThemeName()
  {
    return t('C5 Blanco');
  }

  public function getThemeDescription()
  {
    return t('extra für üch');
  }

  /**
   * @return array
   */
  public function getThemeBlockClasses()
  {
    return [];
  }

  /**
   * @return array
   */
  public function getThemeAreaClasses()
  {
    return [];
  }

  /**
   * @return array
   */
  public function getThemeDefaultBlockTemplates()
  {
    return [];
  }

  /**
   * @return array
   */
  public function getThemeResponsiveImageMap()
  {
      return [
        'large' => '900px',
        'medium' => '768px',
        'small' => '0',
      ];
  }

  /**
   * @return array
   */
  public function getThemeEditorClasses()
  {
      return [];
  }

  /**
   * @return array
   */
  public function getThemeAreaLayoutPresets()
  {
    $presets = [];

    return $presets;
  }
}
