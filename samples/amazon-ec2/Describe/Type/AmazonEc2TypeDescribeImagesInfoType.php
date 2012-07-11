<?php
/**
 * Class file for AmazonEc2TypeDescribeImagesInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImagesInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImagesInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeImagesItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeImagesItemType item
	 * @return AmazonEc2TypeDescribeImagesInfoType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeImagesItemType item
	 * @return DescribeImagesItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeImagesItemType
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