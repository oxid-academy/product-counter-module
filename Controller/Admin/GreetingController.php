<?php

namespace OxidAcademy\ProductCounterModule\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminController;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleSettingBridgeInterface;

class GreetingController extends AdminController
{
    private ModuleSettingBridgeInterface $moduleSettingBridge;
    private string $moduleId = 'oxacproductcountermodule';
    private array $settingNames = [
        'greetingActive' => 'oxacproductcountermodule_greetingactive'
    ];

    public function __construct()
    {
        $this->moduleSettingBridge = ContainerFactory::getInstance()
            ->getContainer()
            ->get(ModuleSettingBridgeInterface::class);
    }

    public function render()
    {
        $this->receiveSettings();

        parent::render();

        return 'greeting_settings.tpl';
    }

    public function save()
    {
        $editval = Registry::getRequest()->getRequestParameter('editval');

        if (isset($editval['greetingactive']) && $editval['greetingactive'] == true) {
            $this->moduleSettingBridge->save($this->settingNames['greetingActive'], true, $this->moduleId);
        } else {
            $this->moduleSettingBridge->save($this->settingNames['greetingActive'], false, $this->moduleId);
        }
    }

    private function receiveSettings()
    {
        $this->_aViewData['greetingActive'] = $this->moduleSettingBridge->get($this->settingNames['greetingActive'], $this->moduleId);
    }
}
