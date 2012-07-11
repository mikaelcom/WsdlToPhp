<?php
/**
 * Class file for XiQuotesTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetHistoricalTicksResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetHistoricalTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeTicks
	 */
	public $GetHistoricalTicksResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeTicks GetHistoricalTicksResult
	 * @return XiQuotesTypeGetHistoricalTicksResponse
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
	 * @return XiQuotesTypeTicks
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