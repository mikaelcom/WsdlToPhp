<?php
/**
 * Class file for AmazonEc2TypeVpcIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpcIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpcIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVpcIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpcIdSetItemType item
	 * @return AmazonEc2TypeVpcIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VpcIdSetItemType item
	 * @return VpcIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVpcIdSetItemType
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