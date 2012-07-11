<?php
/**
 * Class file for AmazonEc2TypeDhcpOptionsIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDhcpOptionsIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDhcpOptionsIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDhcpOptionsIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDhcpOptionsIdSetItemType item
	 * @return AmazonEc2TypeDhcpOptionsIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DhcpOptionsIdSetItemType item
	 * @return DhcpOptionsIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDhcpOptionsIdSetItemType
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