<?php
/**
 * Class file for SOGeoCoderTypeGetBestMatchResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetBestMatchResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetBestMatchResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetBestMatchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeLocation
	 */
	public $GetBestMatchResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeLocation GetBestMatchResult
	 * @return SOGeoCoderTypeGetBestMatchResponse
	 */
	public function __construct($_GetBestMatchResult = null)
	{
		parent::__construct(array('GetBestMatchResult'=>$_GetBestMatchResult));
	}
	/**
	 * Set GetBestMatchResult
	 * @param Location GetBestMatchResult
	 * @return Location
	 */
	public function setGetBestMatchResult($_GetBestMatchResult)
	{
		return ($this->GetBestMatchResult = $_GetBestMatchResult);
	}
	/**
	 * Get GetBestMatchResult
	 * @return SOGeoCoderTypeLocation
	 */
	public function getGetBestMatchResult()
	{
		return $this->GetBestMatchResult;
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