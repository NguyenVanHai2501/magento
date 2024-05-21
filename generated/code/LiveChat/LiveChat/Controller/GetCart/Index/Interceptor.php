<?php
namespace LiveChat\LiveChat\Controller\GetCart\Index;

/**
 * Interceptor class for @see \LiveChat\LiveChat\Controller\GetCart\Index
 */
class Interceptor extends \LiveChat\LiveChat\Controller\GetCart\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Cart $cart, \Magento\Customer\Model\Session $customerSession, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($context, $cart, $customerSession, $orderCollectionFactory, $scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastOrderDetails()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastOrderDetails');
        return $pluginInfo ? $this->___callPlugins('getLastOrderDetails', func_get_args(), $pluginInfo) : parent::getLastOrderDetails();
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalOrdersCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotalOrdersCount');
        return $pluginInfo ? $this->___callPlugins('getTotalOrdersCount', func_get_args(), $pluginInfo) : parent::getTotalOrdersCount();
    }

    /**
     * {@inheritdoc}
     */
    public function showCustomParam($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showCustomParam');
        return $pluginInfo ? $this->___callPlugins('showCustomParam', func_get_args(), $pluginInfo) : parent::showCustomParam($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetails()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetails');
        return $pluginInfo ? $this->___callPlugins('getProductDetails', func_get_args(), $pluginInfo) : parent::getProductDetails();
    }

    /**
     * {@inheritdoc}
     */
    public function getCartGrandTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCartGrandTotal');
        return $pluginInfo ? $this->___callPlugins('getCartGrandTotal', func_get_args(), $pluginInfo) : parent::getCartGrandTotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomVariables()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomVariables');
        return $pluginInfo ? $this->___callPlugins('getCustomVariables', func_get_args(), $pluginInfo) : parent::getCustomVariables();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
