<?php
/**
 * Class file for XiQuotesTypeGetHistoricalTicksAsOfDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetHistoricalTicksAsOfDateResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetHistoricalTicksAsOfDateResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetHistoricalTicksAsOfDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeTicks
	 */
	public $GetHistoricalTicksAsOfDateResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeTicks GetHistoricalTicksAsOfDateResult
	 * @return XiQuotesTypeGetHistoricalTicksAsOfDateResponse
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
	 * @return XiQuotesTypeTicks
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