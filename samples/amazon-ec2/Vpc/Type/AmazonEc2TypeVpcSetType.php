<?php
/**
 * Class file for AmazonEc2TypeVpcSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVpcSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVpcSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVpcType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVpcType item
	 * @return AmazonEc2TypeVpcSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VpcType item
	 * @return VpcType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVpcType
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