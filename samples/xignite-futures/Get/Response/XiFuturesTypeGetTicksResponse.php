<?php
/**
 * Class file for XiFuturesTypeGetTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTicksResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetTicksResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeTicks
	 */
	public $GetTicksResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeTicks GetTicksResult
	 * @return XiFuturesTypeGetTicksResponse
	 */
	public function __construct($_GetTicksResult = null)
	{
		parent::__construct(array('GetTicksResult'=>$_GetTicksResult));
	}
	/**
	 * Set GetTicksResult
	 * @param Ticks GetTicksResult
	 * @return Ticks
	 */
	public function setGetTicksResult($_GetTicksResult)
	{
		return ($this->GetTicksResult = $_GetTicksResult);
	}
	/**
	 * Get GetTicksResult
	 * @return XiFuturesTypeTicks
	 */
	public function getGetTicksResult()
	{
		return $this->GetTicksResult;
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