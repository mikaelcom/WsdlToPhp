<?php
/**
 * Class file for AmazonEc2TypeLicenseCapacitySetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLicenseCapacitySetType
 * @date 10/07/2012
 */
class AmazonEc2TypeLicenseCapacitySetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeLicenseCapacitySetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeLicenseCapacitySetItemType item
	 * @return AmazonEc2TypeLicenseCapacitySetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param LicenseCapacitySetItemType item
	 * @return LicenseCapacitySetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeLicenseCapacitySetItemType
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