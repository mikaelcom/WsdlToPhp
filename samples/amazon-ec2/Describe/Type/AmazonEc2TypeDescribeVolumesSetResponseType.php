<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumesSetResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumesSetResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumesSetResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeVolumesSetItemResponseType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeVolumesSetItemResponseType item
	 * @return AmazonEc2TypeDescribeVolumesSetResponseType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeVolumesSetItemResponseType item
	 * @return DescribeVolumesSetItemResponseType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeVolumesSetItemResponseType
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