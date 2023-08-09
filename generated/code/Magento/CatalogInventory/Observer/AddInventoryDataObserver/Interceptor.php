<?php
namespace Magento\CatalogInventory\Observer\AddInventoryDataObserver;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Observer\AddInventoryDataObserver
 */
class Interceptor extends \Magento\CatalogInventory\Observer\AddInventoryDataObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Helper\Stock $stockHelper)
    {
        $this->___init();
        parent::__construct($stockHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}
