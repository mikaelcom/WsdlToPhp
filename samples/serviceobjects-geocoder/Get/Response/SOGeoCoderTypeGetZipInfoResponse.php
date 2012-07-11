<?php
/**
 * Class file for SOGeoCoderTypeGetZipInfoResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetZipInfoResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetZipInfoResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetZipInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeZipCodeInfo
	 */
	public $GetZipInfoResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeZipCodeInfo GetZipInfoResult
	 * @return SOGeoCoderTypeGetZipInfoResponse
	 */
	public function __construct($_GetZipInfoResult = null)
	{
		parent::__construct(array('GetZipInfoResult'=>$_GetZipInfoResult));
	}
	/**
	 * Set GetZipInfoResult
	 * @param ZipCodeInfo GetZipInfoResult
	 * @return ZipCodeInfo
	 */
	public function setGetZipInfoResult($_GetZipInfoResult)
	{
		return ($this->GetZipInfoResult = $_GetZipInfoResult);
	}
	/**
	 * Get GetZipInfoResult
	 * @return SOGeoCoderTypeZipCodeInfo
	 */
	public function getGetZipInfoResult()
	{
		return $this->GetZipInfoResult;
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