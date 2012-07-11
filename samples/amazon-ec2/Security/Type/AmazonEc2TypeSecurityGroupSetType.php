<?php
/**
 * Class file for AmazonEc2TypeSecurityGroupSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSecurityGroupSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeSecurityGroupSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeSecurityGroupItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeSecurityGroupItemType item
	 * @return AmazonEc2TypeSecurityGroupSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param SecurityGroupItemType item
	 * @return SecurityGroupItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeSecurityGroupItemType
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