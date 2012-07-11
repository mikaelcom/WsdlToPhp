<?php
/**
 * Class file for AmazonEc2TypeDescribeLicensesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeLicensesType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeLicensesType extends AmazonEc2WsdlClass
{
	/**
	 * The licenseIdSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeLicenseIdSetType
	 */
	public $licenseIdSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeLicenseIdSetType licenseIdSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @return AmazonEc2TypeDescribeLicensesType
	 */
	public function __construct($_licenseIdSet = null,$_filterSet = null)
	{
		parent::__construct(array('licenseIdSet'=>$_licenseIdSet,'filterSet'=>$_filterSet));
	}
	/**
	 * Set licenseIdSet
	 * @param LicenseIdSetType licenseIdSet
	 * @return LicenseIdSetType
	 */
	public function setLicenseIdSet($_licenseIdSet)
	{
		return ($this->licenseIdSet = $_licenseIdSet);
	}
	/**
	 * Get licenseIdSet
	 * @return AmazonEc2TypeLicenseIdSetType
	 */
	public function getLicenseIdSet()
	{
		return $this->licenseIdSet;
	}
	/**
	 * Set filterSet
	 * @param FilterSetType filterSet
	 * @return FilterSetType
	 */
	public function setFilterSet($_filterSet)
	{
		return ($this->filterSet = $_filterSet);
	}
	/**
	 * Get filterSet
	 * @return AmazonEc2TypeFilterSetType
	 */
	public function getFilterSet()
	{
		return $this->filterSet;
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