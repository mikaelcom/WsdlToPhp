<?php
/**
 * Class file for AmazonEc2TypeCustomerGatewaySetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCustomerGatewaySetType
 * @date 10/07/2012
 */
class AmazonEc2TypeCustomerGatewaySetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeCustomerGatewayType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeCustomerGatewayType item
	 * @return AmazonEc2TypeCustomerGatewaySetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param CustomerGatewayType item
	 * @return CustomerGatewayType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeCustomerGatewayType
	 */
	public function getItem()
	{
		return $this->item;
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