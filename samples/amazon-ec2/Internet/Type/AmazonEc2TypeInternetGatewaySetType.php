<?php
/**
 * Class file for AmazonEc2TypeInternetGatewaySetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInternetGatewaySetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInternetGatewaySetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInternetGatewayType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInternetGatewayType item
	 * @return AmazonEc2TypeInternetGatewaySetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InternetGatewayType item
	 * @return InternetGatewayType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInternetGatewayType
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