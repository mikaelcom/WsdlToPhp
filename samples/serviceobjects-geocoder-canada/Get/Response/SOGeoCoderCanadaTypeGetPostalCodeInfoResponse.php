<?php
/**
 * Class file for SOGeoCoderCanadaTypeGetPostalCodeInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaTypeGetPostalCodeInfoResponse
 * @date 06/07/2012
 */
class SOGeoCoderCanadaTypeGetPostalCodeInfoResponse extends SOGeoCoderCanadaWsdlClass
{
	/**
	 * The GetPostalCodeInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderCanadaTypePostalCodeInfo
	 */
	public $GetPostalCodeInfoResult;
	/**
	 * Constructor
	 * @param SOGeoCoderCanadaTypePostalCodeInfo GetPostalCodeInfoResult
	 * @return SOGeoCoderCanadaTypeGetPostalCodeInfoResponse
	 */
	public function __construct($_GetPostalCodeInfoResult = null)
	{
		parent::__construct(array('GetPostalCodeInfoResult'=>$_GetPostalCodeInfoResult));
	}
	/**
	 * Set GetPostalCodeInfoResult
	 * @param PostalCodeInfo GetPostalCodeInfoResult
	 * @return PostalCodeInfo
	 */
	public function setGetPostalCodeInfoResult($_GetPostalCodeInfoResult)
	{
		return ($this->GetPostalCodeInfoResult = $_GetPostalCodeInfoResult);
	}
	/**
	 * Get GetPostalCodeInfoResult
	 * @return SOGeoCoderCanadaTypePostalCodeInfo
	 */
	public function getGetPostalCodeInfoResult()
	{
		return $this->GetPostalCodeInfoResult;
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