<?php
/**
 * Class file for XiFuturesTypeGetHistoricalTicksAsOfDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalTicksAsOfDateResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalTicksAsOfDateResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalTicksAsOfDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeTicks
	 */
	public $GetHistoricalTicksAsOfDateResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeTicks GetHistoricalTicksAsOfDateResult
	 * @return XiFuturesTypeGetHistoricalTicksAsOfDateResponse
	 */
	public function __construct($_GetHistoricalTicksAsOfDateResult = null)
	{
		parent::__construct(array('GetHistoricalTicksAsOfDateResult'=>$_GetHistoricalTicksAsOfDateResult));
	}
	/**
	 * Set GetHistoricalTicksAsOfDateResult
	 * @param Ticks GetHistoricalTicksAsOfDateResult
	 * @return Ticks
	 */
	public function setGetHistoricalTicksAsOfDateResult($_GetHistoricalTicksAsOfDateResult)
	{
		return ($this->GetHistoricalTicksAsOfDateResult = $_GetHistoricalTicksAsOfDateResult);
	}
	/**
	 * Get GetHistoricalTicksAsOfDateResult
	 * @return XiFuturesTypeTicks
	 */
	public function getGetHistoricalTicksAsOfDateResult()
	{
		return $this->GetHistoricalTicksAsOfDateResult;
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