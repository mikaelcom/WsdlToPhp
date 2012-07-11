<?php
/**
 * Class file for XiRealTimeTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetHistoricalTicksResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetHistoricalTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTicks
	 */
	public $GetHistoricalTicksResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTicks GetHistoricalTicksResult
	 * @return XiRealTimeTypeGetHistoricalTicksResponse
	 */
	public function __construct($_GetHistoricalTicksResult = null)
	{
		parent::__construct(array('GetHistoricalTicksResult'=>$_GetHistoricalTicksResult));
	}
	/**
	 * Set GetHistoricalTicksResult
	 * @param Ticks GetHistoricalTicksResult
	 * @return Ticks
	 */
	public function setGetHistoricalTicksResult($_GetHistoricalTicksResult)
	{
		return ($this->GetHistoricalTicksResult = $_GetHistoricalTicksResult);
	}
	/**
	 * Get GetHistoricalTicksResult
	 * @return XiRealTimeTypeTicks
	 */
	public function getGetHistoricalTicksResult()
	{
		return $this->GetHistoricalTicksResult;
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