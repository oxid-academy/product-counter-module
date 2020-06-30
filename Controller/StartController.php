<?php

namespace OxidAcademy\ProductCounterModule\Controller;

use OxidAcademy\ProductCounterService\Counter;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;

class StartController extends StartController_parent
{
    public function init()
    {
        parent::init();

        $this->_aViewData['numberOfProducts'] = $this->getNumberOfProducts();
    }

    private function getNumberOfProducts(): int
    {
        $containerFactory = ContainerFactory::getInstance();
        $container = $containerFactory->getContainer();
        $counterService = $container->get(Counter::class);

        return $counterService->count();
    }
}
