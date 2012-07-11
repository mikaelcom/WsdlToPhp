<?php
/**
 * Class file for AmazonEc2TypeLicenseIdSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLicenseIdSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeLicenseIdSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The licenseId
	 * @var string
	 */
	public $licenseId;
	/**
	 * Constructor
	 * @param string licenseId
	 * @return AmazonEc2TypeLicenseIdSetItemType
	 */
	public function __construct($_licenseId = null)
	{
		parent::__construct(array('licenseId'=>$_licenseId));
	}
	/**
	 * Set licenseId
	 * @param string licenseId
	 * @return string
	 */
	public function setLicenseId($_licenseId)
	{
		return ($this->licenseId = $_licenseId);
	}
	/**
	 * Get licenseId
	 * @return string
	 */
	public function getLicenseId()
	{
		return $this->licenseId;
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