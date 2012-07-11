<?php
/**
 * Class file for AmazonEc2TypeDhcpConfigurationItemSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDhcpConfigurationItemSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDhcpConfigurationItemSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDhcpConfigurationItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDhcpConfigurationItemType item
	 * @return AmazonEc2TypeDhcpConfigurationItemSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DhcpConfigurationItemType item
	 * @return DhcpConfigurationItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDhcpConfigurationItemType
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