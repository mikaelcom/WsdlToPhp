<?php
/**
 * Class file for AmazonEc2TypeNetworkInterfaceSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkInterfaceSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkInterfaceSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeNetworkInterfaceType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeNetworkInterfaceType item
	 * @return AmazonEc2TypeNetworkInterfaceSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param NetworkInterfaceType item
	 * @return NetworkInterfaceType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeNetworkInterfaceType
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