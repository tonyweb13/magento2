<?php
namespace Temando\Shipping\Rest\Request\Type\Order\Experience;

/**
 * Factory class for @see \Temando\Shipping\Rest\Request\Type\Order\Experience\Description
 */
class DescriptionFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Temando\\Shipping\\Rest\\Request\\Type\\Order\\Experience\\Description')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Temando\Shipping\Rest\Request\Type\Order\Experience\Description
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
