<?php
/**
 * Class file for AmazonEc2TypeDescribeImagesExecutableBySetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImagesExecutableBySetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImagesExecutableBySetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeImagesExecutableByType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeImagesExecutableByType item
	 * @return AmazonEc2TypeDescribeImagesExecutableBySetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeImagesExecutableByType item
	 * @return DescribeImagesExecutableByType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeImagesExecutableByType
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