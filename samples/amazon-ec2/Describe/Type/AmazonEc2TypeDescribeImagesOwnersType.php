<?php
/**
 * Class file for AmazonEc2TypeDescribeImagesOwnersType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImagesOwnersType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImagesOwnersType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeImagesOwnerType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeImagesOwnerType item
	 * @return AmazonEc2TypeDescribeImagesOwnersType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeImagesOwnerType item
	 * @return DescribeImagesOwnerType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeImagesOwnerType
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