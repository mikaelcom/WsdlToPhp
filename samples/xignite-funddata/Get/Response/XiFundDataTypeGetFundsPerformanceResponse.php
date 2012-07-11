<?php
/**
 * Class file for XiFundDataTypeGetFundsPerformanceResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundsPerformanceResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundsPerformanceResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundsPerformanceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfFundPerformance
	 */
	public $GetFundsPerformanceResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeArrayOfFundPerformance GetFundsPerformanceResult
	 * @return XiFundDataTypeGetFundsPerformanceResponse
	 */
	public function __construct($_GetFundsPerformanceResult = null)
	{
		parent::__construct(array('GetFundsPerformanceResult'=>new XiFundDataTypeArrayOfFundPerformance($_GetFundsPerformanceResult)));
	}
	/**
	 * Set GetFundsPerformanceResult
	 * @param ArrayOfFundPerformance GetFundsPerformanceResult
	 * @return ArrayOfFundPerformance
	 */
	public function setGetFundsPerformanceResult($_GetFundsPerformanceResult)
	{
		return ($this->GetFundsPerformanceResult = $_GetFundsPerformanceResult);
	}
	/**
	 * Get GetFundsPerformanceResult
	 * @return XiFundDataTypeArrayOfFundPerformance
	 */
	public function getGetFundsPerformanceResult()
	{
		return $this->GetFundsPerformanceResult;
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