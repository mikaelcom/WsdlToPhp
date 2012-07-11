<?php
/**
 * Class file for XiHistoricalTypeGetTopMoversByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopMoversByExchangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopMoversByExchangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetTopMoversByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfTop
	 */
	public $GetTopMoversByExchangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfTop GetTopMoversByExchangeResult
	 * @return XiHistoricalTypeGetTopMoversByExchangeResponse
	 */
	public function __construct($_GetTopMoversByExchangeResult = null)
	{
		parent::__construct(array('GetTopMoversByExchangeResult'=>new XiHistoricalTypeArrayOfTop($_GetTopMoversByExchangeResult)));
	}
	/**
	 * Set GetTopMoversByExchangeResult
	 * @param ArrayOfTop GetTopMoversByExchangeResult
	 * @return ArrayOfTop
	 */
	public function setGetTopMoversByExchangeResult($_GetTopMoversByExchangeResult)
	{
		return ($this->GetTopMoversByExchangeResult = $_GetTopMoversByExchangeResult);
	}
	/**
	 * Get GetTopMoversByExchangeResult
	 * @return XiHistoricalTypeArrayOfTop
	 */
	public function getGetTopMoversByExchangeResult()
	{
		return $this->GetTopMoversByExchangeResult;
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