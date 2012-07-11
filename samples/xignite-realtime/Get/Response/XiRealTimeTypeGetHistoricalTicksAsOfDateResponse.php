<?php
/**
 * Class file for XiRealTimeTypeGetHistoricalTicksAsOfDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetHistoricalTicksAsOfDateResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetHistoricalTicksAsOfDateResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetHistoricalTicksAsOfDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTicks
	 */
	public $GetHistoricalTicksAsOfDateResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTicks GetHistoricalTicksAsOfDateResult
	 * @return XiRealTimeTypeGetHistoricalTicksAsOfDateResponse
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
	 * @return XiRealTimeTypeTicks
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