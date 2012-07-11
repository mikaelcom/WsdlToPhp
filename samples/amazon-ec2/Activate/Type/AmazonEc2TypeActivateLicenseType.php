<?php
/**
 * Class file for AmazonEc2TypeActivateLicenseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeActivateLicenseType
 * @date 10/07/2012
 */
class AmazonEc2TypeActivateLicenseType extends AmazonEc2WsdlClass
{
	/**
	 * The licenseId
	 * @var string
	 */
	public $licenseId;
	/**
	 * The capacity
	 * @var int
	 */
	public $capacity;
	/**
	 * Constructor
	 * @param string licenseId
	 * @param int capacity
	 * @return AmazonEc2TypeActivateLicenseType
	 */
	public function __construct($_licenseId = null,$_capacity = null)
	{
		parent::__construct(array('licenseId'=>$_licenseId,'capacity'=>$_capacity));
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
	 * Set capacity
	 * @param int capacity
	 * @return int
	 */
	public function setCapacity($_capacity)
	{
		return ($this->capacity = $_capacity);
	}
	/**
	 * Get capacity
	 * @return int
	 */
	public function getCapacity()
	{
		return $this->capacity;
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