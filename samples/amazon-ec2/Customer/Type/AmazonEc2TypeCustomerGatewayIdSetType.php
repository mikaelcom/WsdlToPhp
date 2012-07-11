<?php
/**
 * Class file for AmazonEc2TypeCustomerGatewayIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCustomerGatewayIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeCustomerGatewayIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeCustomerGatewayIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeCustomerGatewayIdSetItemType item
	 * @return AmazonEc2TypeCustomerGatewayIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param CustomerGatewayIdSetItemType item
	 * @return CustomerGatewayIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeCustomerGatewayIdSetItemType
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