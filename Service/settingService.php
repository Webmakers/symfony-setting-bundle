<?php
namespace Webmakers\SettingBundle\Service;

use Doctrine\ORM\EntityManager;


class settingService {

    protected $em;
    protected $settings;


    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /*
    public function setEntityManager(EntityManager $entityManager) {
        $this->em = $entityManager;
    }
    */

    public function getSetting($setting_name)
    {
        return $this->em->getRepository('WebmakersSettingBundle:Setting')
            ->getSetting($setting_name)->getvalue();
    }

    public function getAllSettings()
    {

    }

    public function setSetting($setting_name, $value, $type)
    {

    }

    public function removeSetting($setting_name)
    {

    }

    public function resetSetting($setting_name)
    {

    }

}
