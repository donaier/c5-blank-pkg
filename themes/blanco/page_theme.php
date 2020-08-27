<?php

namespace Concrete\Package\Blanco\Theme\Blanco;


use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme as Theme;

defined('C5_EXECUTE') or die("Access Denied.");

class PageTheme extends Theme implements ThemeProviderInterface
{
    protected $pThemeName = 'Blanco';
    protected $pThemeDescription = 'A theme.';
    protected $pThemeHandle = 'blanco';
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    /**
     *
     * public function registerAssets() {
     *    $this->providesAsset('css', 'bootstrap/*');
     *    $this->providesAsset('css', 'blocks/form');
     *    $this->requireAsset('javascript', 'jquery');
     * }
     */

    public function getThemeAreaLayoutPresets()
    {
        return [];
    }
}
