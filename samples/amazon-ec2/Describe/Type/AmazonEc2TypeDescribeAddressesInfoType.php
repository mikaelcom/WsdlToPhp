<?php
/**
 * Class file for AmazonEc2TypeDescribeAddressesInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAddressesInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAddressesInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeAddressesItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeAddressesItemType item
	 * @return AmazonEc2TypeDescribeAddressesInfoType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeAddressesItemType item
	 * @return DescribeAddressesItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeAddressesItemType
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