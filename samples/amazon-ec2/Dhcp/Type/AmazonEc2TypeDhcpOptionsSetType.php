<?php
/**
 * Class file for AmazonEc2TypeDhcpOptionsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDhcpOptionsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDhcpOptionsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDhcpOptionsType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDhcpOptionsType item
	 * @return AmazonEc2TypeDhcpOptionsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DhcpOptionsType item
	 * @return DhcpOptionsType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDhcpOptionsType
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