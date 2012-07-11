<?php
/**
 * Class file for AmazonEc2TypeSubnetIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSubnetIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSubnetIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeSubnetIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSubnetIdSetItemType item
	 * @return AmazonEc2TypeSubnetIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param SubnetIdSetItemType item
	 * @return SubnetIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeSubnetIdSetItemType
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