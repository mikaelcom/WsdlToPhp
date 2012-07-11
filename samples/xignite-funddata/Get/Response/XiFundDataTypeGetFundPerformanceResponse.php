<?php
/**
 * Class file for XiFundDataTypeGetFundPerformanceResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundPerformanceResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundPerformanceResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundPerformanceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundPerformance
	 */
	public $GetFundPerformanceResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundPerformance GetFundPerformanceResult
	 * @return XiFundDataTypeGetFundPerformanceResponse
	 */
	public function __construct($_GetFundPerformanceResult = null)
	{
		parent::__construct(array('GetFundPerformanceResult'=>$_GetFundPerformanceResult));
	}
	/**
	 * Set GetFundPerformanceResult
	 * @param FundPerformance GetFundPerformanceResult
	 * @return FundPerformance
	 */
	public function setGetFundPerformanceResult($_GetFundPerformanceResult)
	{
		return ($this->GetFundPerformanceResult = $_GetFundPerformanceResult);
	}
	/**
	 * Get GetFundPerformanceResult
	 * @return XiFundDataTypeFundPerformance
	 */
	public function getGetFundPerformanceResult()
	{
		return $this->GetFundPerformanceResult;
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