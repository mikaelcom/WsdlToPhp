<?php
/**
 * Class file for XiMetalsTypeGetAllDelayedMetalFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetAllDelayedMetalFuturesResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetAllDelayedMetalFuturesResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetAllDelayedMetalFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfFutureQuote
	 */
	public $GetAllDelayedMetalFuturesResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfFutureQuote GetAllDelayedMetalFuturesResult
	 * @return XiMetalsTypeGetAllDelayedMetalFuturesResponse
	 */
	public function __construct($_GetAllDelayedMetalFuturesResult = null)
	{
		parent::__construct(array('GetAllDelayedMetalFuturesResult'=>new XiMetalsTypeArrayOfFutureQuote($_GetAllDelayedMetalFuturesResult)));
	}
	/**
	 * Set GetAllDelayedMetalFuturesResult
	 * @param ArrayOfFutureQuote GetAllDelayedMetalFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllDelayedMetalFuturesResult($_GetAllDelayedMetalFuturesResult)
	{
		return ($this->GetAllDelayedMetalFuturesResult = $_GetAllDelayedMetalFuturesResult);
	}
	/**
	 * Get GetAllDelayedMetalFuturesResult
	 * @return XiMetalsTypeArrayOfFutureQuote
	 */
	public function getGetAllDelayedMetalFuturesResult()
	{
		return $this->GetAllDelayedMetalFuturesResult;
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