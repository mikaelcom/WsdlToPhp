<?php
/**
 * Class file for SOGeoCoderTypeGetBestMatch_V3Response
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetBestMatch_V3Response
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetBestMatch_V3Response extends SOGeoCoderWsdlClass
{
	/**
	 * The GetBestMatch_V3Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeLocation_V3
	 */
	public $GetBestMatch_V3Result;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeLocation_V3 GetBestMatch_V3Result
	 * @return SOGeoCoderTypeGetBestMatch_V3Response
	 */
	public function __construct($_GetBestMatch_V3Result = null)
	{
		parent::__construct(array('GetBestMatch_V3Result'=>$_GetBestMatch_V3Result));
	}
	/**
	 * Set GetBestMatch_V3Result
	 * @param Location_V3 GetBestMatch_V3Result
	 * @return Location_V3
	 */
	public function setGetBestMatch_V3Result($_GetBestMatch_V3Result)
	{
		return ($this->GetBestMatch_V3Result = $_GetBestMatch_V3Result);
	}
	/**
	 * Get GetBestMatch_V3Result
	 * @return SOGeoCoderTypeLocation_V3
	 */
	public function getGetBestMatch_V3Result()
	{
		return $this->GetBestMatch_V3Result;
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