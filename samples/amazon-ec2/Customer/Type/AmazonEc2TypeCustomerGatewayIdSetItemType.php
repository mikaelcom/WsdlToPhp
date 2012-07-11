<?php
/**
 * Class file for AmazonEc2TypeCustomerGatewayIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCustomerGatewayIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeCustomerGatewayIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The customerGatewayId
	 * @var string
	 */
	public $customerGatewayId;
	/**
	 * Constructor
	 * @param string customerGatewayId
	 * @return AmazonEc2TypeCustomerGatewayIdSetItemType
	 */
	public function __construct($_customerGatewayId = null)
	{
		parent::__construct(array('customerGatewayId'=>$_customerGatewayId));
	}
	/**
	 * Set customerGatewayId
	 * @param string customerGatewayId
	 * @return string
	 */
	public function setCustomerGatewayId($_customerGatewayId)
	{
		return ($this->customerGatewayId = $_customerGatewayId);
	}
	/**
	 * Get customerGatewayId
	 * @return string
	 */
	public function getCustomerGatewayId()
	{
		return $this->customerGatewayId;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>