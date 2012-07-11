<?php
/**
 * Class file for XiFuturesTypeGetTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTickResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetTickResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeSingleTick
	 */
	public $GetTickResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeSingleTick GetTickResult
	 * @return XiFuturesTypeGetTickResponse
	 */
	public function __construct($_GetTickResult = null)
	{
		parent::__construct(array('GetTickResult'=>$_GetTickResult));
	}
	/**
	 * Set GetTickResult
	 * @param SingleTick GetTickResult
	 * @return SingleTick
	 */
	public function setGetTickResult($_GetTickResult)
	{
		return ($this->GetTickResult = $_GetTickResult);
	}
	/**
	 * Get GetTickResult
	 * @return XiFuturesTypeSingleTick
	 */
	public function getGetTickResult()
	{
		return $this->GetTickResult;
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