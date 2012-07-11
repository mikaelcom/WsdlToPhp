<?php
/**
 * Class file for AmazonEc2TypeLicenseIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLicenseIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeLicenseIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeLicenseIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeLicenseIdSetItemType item
	 * @return AmazonEc2TypeLicenseIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param LicenseIdSetItemType item
	 * @return LicenseIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeLicenseIdSetItemType
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