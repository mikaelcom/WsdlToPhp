<?php
/**
 * Class file for SOGeoCoderTypeGetReverseLocationResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetReverseLocationResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetReverseLocationResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetReverseLocationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeReverseAddress
	 */
	public $GetReverseLocationResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeReverseAddress GetReverseLocationResult
	 * @return SOGeoCoderTypeGetReverseLocationResponse
	 */
	public function __construct($_GetReverseLocationResult = null)
	{
		parent::__construct(array('GetReverseLocationResult'=>$_GetReverseLocationResult));
	}
	/**
	 * Set GetReverseLocationResult
	 * @param ReverseAddress GetReverseLocationResult
	 * @return ReverseAddress
	 */
	public function setGetReverseLocationResult($_GetReverseLocationResult)
	{
		return ($this->GetReverseLocationResult = $_GetReverseLocationResult);
	}
	/**
	 * Get GetReverseLocationResult
	 * @return SOGeoCoderTypeReverseAddress
	 */
	public function getGetReverseLocationResult()
	{
		return $this->GetReverseLocationResult;
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