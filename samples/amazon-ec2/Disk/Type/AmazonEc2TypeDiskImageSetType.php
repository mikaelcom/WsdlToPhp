<?php
/**
 * Class file for AmazonEc2TypeDiskImageSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDiskImageSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDiskImageSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDiskImageType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDiskImageType item
	 * @return AmazonEc2TypeDiskImageSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DiskImageType item
	 * @return DiskImageType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDiskImageType
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