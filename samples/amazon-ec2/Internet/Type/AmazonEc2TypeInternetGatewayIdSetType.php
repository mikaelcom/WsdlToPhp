<?php
/**
 * Class file for AmazonEc2TypeInternetGatewayIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInternetGatewayIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInternetGatewayIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInternetGatewayIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInternetGatewayIdSetItemType item
	 * @return AmazonEc2TypeInternetGatewayIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InternetGatewayIdSetItemType item
	 * @return InternetGatewayIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInternetGatewayIdSetItemType
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