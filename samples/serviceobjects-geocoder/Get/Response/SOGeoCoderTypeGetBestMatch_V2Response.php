<?php
/**
 * Class file for SOGeoCoderTypeGetBestMatch_V2Response
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetBestMatch_V2Response
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetBestMatch_V2Response extends SOGeoCoderWsdlClass
{
	/**
	 * The GetBestMatch_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeLocation
	 */
	public $GetBestMatch_V2Result;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeLocation GetBestMatch_V2Result
	 * @return SOGeoCoderTypeGetBestMatch_V2Response
	 */
	public function __construct($_GetBestMatch_V2Result = null)
	{
		parent::__construct(array('GetBestMatch_V2Result'=>$_GetBestMatch_V2Result));
	}
	/**
	 * Set GetBestMatch_V2Result
	 * @param Location GetBestMatch_V2Result
	 * @return Location
	 */
	public function setGetBestMatch_V2Result($_GetBestMatch_V2Result)
	{
		return ($this->GetBestMatch_V2Result = $_GetBestMatch_V2Result);
	}
	/**
	 * Get GetBestMatch_V2Result
	 * @return SOGeoCoderTypeLocation
	 */
	public function getGetBestMatch_V2Result()
	{
		return $this->GetBestMatch_V2Result;
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