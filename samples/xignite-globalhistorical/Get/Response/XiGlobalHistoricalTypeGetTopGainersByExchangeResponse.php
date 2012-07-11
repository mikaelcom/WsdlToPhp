<?php
/**
 * Class file for XiGlobalHistoricalTypeGetTopGainersByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetTopGainersByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetTopGainersByExchangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetTopGainersByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfGlobalTop
	 */
	public $GetTopGainersByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfGlobalTop GetTopGainersByExchangeResult
	 * @return XiGlobalHistoricalTypeGetTopGainersByExchangeResponse
	 */
	public function __construct($_GetTopGainersByExchangeResult = null)
	{
		parent::__construct(array('GetTopGainersByExchangeResult'=>new XiGlobalHistoricalTypeArrayOfGlobalTop($_GetTopGainersByExchangeResult)));
	}
	/**
	 * Set GetTopGainersByExchangeResult
	 * @param ArrayOfGlobalTop GetTopGainersByExchangeResult
	 * @return ArrayOfGlobalTop
	 */
	public function setGetTopGainersByExchangeResult($_GetTopGainersByExchangeResult)
	{
		return ($this->GetTopGainersByExchangeResult = $_GetTopGainersByExchangeResult);
	}
	/**
	 * Get GetTopGainersByExchangeResult
	 * @return XiGlobalHistoricalTypeArrayOfGlobalTop
	 */
	public function getGetTopGainersByExchangeResult()
	{
		return $this->GetTopGainersByExchangeResult;
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