<?php
/**
 * Class file for XiGlobalHistoricalTypeGetTopLosersByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetTopLosersByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetTopLosersByExchangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetTopLosersByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfGlobalTop
	 */
	public $GetTopLosersByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfGlobalTop GetTopLosersByExchangeResult
	 * @return XiGlobalHistoricalTypeGetTopLosersByExchangeResponse
	 */
	public function __construct($_GetTopLosersByExchangeResult = null)
	{
		parent::__construct(array('GetTopLosersByExchangeResult'=>new XiGlobalHistoricalTypeArrayOfGlobalTop($_GetTopLosersByExchangeResult)));
	}
	/**
	 * Set GetTopLosersByExchangeResult
	 * @param ArrayOfGlobalTop GetTopLosersByExchangeResult
	 * @return ArrayOfGlobalTop
	 */
	public function setGetTopLosersByExchangeResult($_GetTopLosersByExchangeResult)
	{
		return ($this->GetTopLosersByExchangeResult = $_GetTopLosersByExchangeResult);
	}
	/**
	 * Get GetTopLosersByExchangeResult
	 * @return XiGlobalHistoricalTypeArrayOfGlobalTop
	 */
	public function getGetTopLosersByExchangeResult()
	{
		return $this->GetTopLosersByExchangeResult;
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