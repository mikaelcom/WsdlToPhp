<?php
/**
 * Class file for AmazonEc2TypeSecurityGroupIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSecurityGroupIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSecurityGroupIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeSecurityGroupIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSecurityGroupIdSetItemType item
	 * @return AmazonEc2TypeSecurityGroupIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param SecurityGroupIdSetItemType item
	 * @return SecurityGroupIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeSecurityGroupIdSetItemType
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