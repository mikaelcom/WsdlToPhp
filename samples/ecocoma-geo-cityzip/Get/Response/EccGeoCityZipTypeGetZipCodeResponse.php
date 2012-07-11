<?php
/**
 * Class file for EccGeoCityZipTypeGetZipCodeResponse
 * @date 03/07/2012
 */
/**
 * Class EccGeoCityZipTypeGetZipCodeResponse
 * @date 03/07/2012
 */
class EccGeoCityZipTypeGetZipCodeResponse extends EccGeoCityZipWsdlClass
{
	/**
	 * The GetZipCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccGeoCityZipTypeCityZip
	 */
	public $GetZipCodeResult;
	/**
	 * Constructor
	 * @param EccGeoCityZipTypeCityZip GetZipCodeResult
	 * @return EccGeoCityZipTypeGetZipCodeResponse
	 */
	public function __construct($_GetZipCodeResult = null)
	{
		parent::__construct(array('GetZipCodeResult'=>$_GetZipCodeResult));
	}
	/**
	 * Set GetZipCodeResult
	 * @param CityZip GetZipCodeResult
	 * @return CityZip
	 */
	public function setGetZipCodeResult($_GetZipCodeResult)
	{
		return ($this->GetZipCodeResult = $_GetZipCodeResult);
	}
	/**
	 * Get GetZipCodeResult
	 * @return EccGeoCityZipTypeCityZip
	 */
	public function getGetZipCodeResult()
	{
		return $this->GetZipCodeResult;
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