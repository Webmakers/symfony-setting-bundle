<?php
namespace Webmakers\SettingBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Webmakers\SettingBundle\Service\SettingService;

class settingExtension extends \Twig_Extension
{

    protected $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'get_setting' => new \Twig_Function_Method($this, 'getSetting')
        );
    }

    /**
     * Get setting value by name
     *
     * @param string $name
     * @return mixed
     */
    public function getSetting($name)
    {
        return $this->settingService->getSetting($name);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'webmakers_setting_extension';
    }
}
