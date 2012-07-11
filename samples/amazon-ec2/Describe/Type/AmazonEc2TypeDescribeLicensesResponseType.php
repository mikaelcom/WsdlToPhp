<?php
/**
 * Class file for AmazonEc2TypeDescribeLicensesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeLicensesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeLicensesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The licenseSet
	 * @var AmazonEc2TypeLicenseSetType
	 */
	public $licenseSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeLicenseSetType licenseSet
	 * @return AmazonEc2TypeDescribeLicensesResponseType
	 */
	public function __construct($_requestId = null,$_licenseSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'licenseSet'=>$_licenseSet));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set licenseSet
	 * @param LicenseSetType licenseSet
	 * @return LicenseSetType
	 */
	public function setLicenseSet($_licenseSet)
	{
		return ($this->licenseSet = $_licenseSet);
	}
	/**
	 * Get licenseSet
	 * @return AmazonEc2TypeLicenseSetType
	 */
	public function getLicenseSet()
	{
		return $this->licenseSet;
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