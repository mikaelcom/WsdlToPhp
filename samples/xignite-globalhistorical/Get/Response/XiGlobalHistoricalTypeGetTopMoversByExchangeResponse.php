<?php
/**
 * Class file for XiGlobalHistoricalTypeGetTopMoversByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetTopMoversByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetTopMoversByExchangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetTopMoversByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfGlobalTop
	 */
	public $GetTopMoversByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfGlobalTop GetTopMoversByExchangeResult
	 * @return XiGlobalHistoricalTypeGetTopMoversByExchangeResponse
	 */
	public function __construct($_GetTopMoversByExchangeResult = null)
	{
		parent::__construct(array('GetTopMoversByExchangeResult'=>new XiGlobalHistoricalTypeArrayOfGlobalTop($_GetTopMoversByExchangeResult)));
	}
	/**
	 * Set GetTopMoversByExchangeResult
	 * @param ArrayOfGlobalTop GetTopMoversByExchangeResult
	 * @return ArrayOfGlobalTop
	 */
	public function setGetTopMoversByExchangeResult($_GetTopMoversByExchangeResult)
	{
		return ($this->GetTopMoversByExchangeResult = $_GetTopMoversByExchangeResult);
	}
	/**
	 * Get GetTopMoversByExchangeResult
	 * @return XiGlobalHistoricalTypeArrayOfGlobalTop
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