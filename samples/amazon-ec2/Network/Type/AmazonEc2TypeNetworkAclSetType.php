<?php
/**
 * Class file for AmazonEc2TypeNetworkAclSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkAclSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkAclSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeNetworkAclType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeNetworkAclType item
	 * @return AmazonEc2TypeNetworkAclSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param NetworkAclType item
	 * @return NetworkAclType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeNetworkAclType
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