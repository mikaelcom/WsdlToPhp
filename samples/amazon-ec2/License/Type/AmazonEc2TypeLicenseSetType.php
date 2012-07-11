<?php
/**
 * Class file for AmazonEc2TypeLicenseSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLicenseSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeLicenseSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeLicenseSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeLicenseSetItemType item
	 * @return AmazonEc2TypeLicenseSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param LicenseSetItemType item
	 * @return LicenseSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeLicenseSetItemType
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