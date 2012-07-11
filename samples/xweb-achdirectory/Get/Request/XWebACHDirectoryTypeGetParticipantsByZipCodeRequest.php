<?php
/**
 * Class file for XWebACHDirectoryTypeGetParticipantsByZipCodeRequest
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeGetParticipantsByZipCodeRequest
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeGetParticipantsByZipCodeRequest extends XWebACHDirectoryWsdlClass
{
	/**
	 * The ZipCode
	 * @var ZipCode
	 */
	public $ZipCode;
	/**
	 * Constructor
	 * @param ZipCode ZipCode
	 * @return XWebACHDirectoryTypeGetParticipantsByZipCodeRequest
	 */
	public function __construct($_ZipCode = null)
	{
		parent::__construct(array('ZipCode'=>$_ZipCode));
	}
	/**
	 * Set ZipCode
	 * @param ZipCode ZipCode
	 * @return ZipCode
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return ZipCode
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
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