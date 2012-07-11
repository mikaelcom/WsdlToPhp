<?php
/**
 * Class file for XiGlobalHistoricalTypeGetAllSplitsByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetAllSplitsByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetAllSplitsByExchangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetAllSplitsByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfSplitHistory
	 */
	public $GetAllSplitsByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfSplitHistory GetAllSplitsByExchangeResult
	 * @return XiGlobalHistoricalTypeGetAllSplitsByExchangeResponse
	 */
	public function __construct($_GetAllSplitsByExchangeResult = null)
	{
		parent::__construct(array('GetAllSplitsByExchangeResult'=>new XiGlobalHistoricalTypeArrayOfSplitHistory($_GetAllSplitsByExchangeResult)));
	}
	/**
	 * Set GetAllSplitsByExchangeResult
	 * @param ArrayOfSplitHistory GetAllSplitsByExchangeResult
	 * @return ArrayOfSplitHistory
	 */
	public function setGetAllSplitsByExchangeResult($_GetAllSplitsByExchangeResult)
	{
		return ($this->GetAllSplitsByExchangeResult = $_GetAllSplitsByExchangeResult);
	}
	/**
	 * Get GetAllSplitsByExchangeResult
	 * @return XiGlobalHistoricalTypeArrayOfSplitHistory
	 */
	public function getGetAllSplitsByExchangeResult()
	{
		return $this->GetAllSplitsByExchangeResult;
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