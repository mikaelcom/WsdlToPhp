<?php
/**
 * Class file for AmazonEc2TypeIpPermissionSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeIpPermissionSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeIpPermissionSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeIpPermissionType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeIpPermissionType item
	 * @return AmazonEc2TypeIpPermissionSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param IpPermissionType item
	 * @return IpPermissionType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeIpPermissionType
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