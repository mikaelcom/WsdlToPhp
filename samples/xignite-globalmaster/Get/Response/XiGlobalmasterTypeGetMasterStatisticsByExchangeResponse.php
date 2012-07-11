<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterStatisticsByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterStatisticsByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterStatisticsByExchangeResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetMasterStatisticsByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeStatistics
	 */
	public $GetMasterStatisticsByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeStatistics GetMasterStatisticsByExchangeResult
	 * @return XiGlobalmasterTypeGetMasterStatisticsByExchangeResponse
	 */
	public function __construct($_GetMasterStatisticsByExchangeResult = null)
	{
		parent::__construct(array('GetMasterStatisticsByExchangeResult'=>$_GetMasterStatisticsByExchangeResult));
	}
	/**
	 * Set GetMasterStatisticsByExchangeResult
	 * @param Statistics GetMasterStatisticsByExchangeResult
	 * @return Statistics
	 */
	public function setGetMasterStatisticsByExchangeResult($_GetMasterStatisticsByExchangeResult)
	{
		return ($this->GetMasterStatisticsByExchangeResult = $_GetMasterStatisticsByExchangeResult);
	}
	/**
	 * Get GetMasterStatisticsByExchangeResult
	 * @return XiGlobalmasterTypeStatistics
	 */
	public function getGetMasterStatisticsByExchangeResult()
	{
		return $this->GetMasterStatisticsByExchangeResult;
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