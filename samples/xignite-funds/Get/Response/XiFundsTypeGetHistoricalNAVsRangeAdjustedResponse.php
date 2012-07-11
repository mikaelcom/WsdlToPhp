<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVsRangeAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVsRangeAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVsRangeAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVsRangeAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAVs
	 */
	public $GetHistoricalNAVsRangeAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAVs GetHistoricalNAVsRangeAdjustedResult
	 * @return XiFundsTypeGetHistoricalNAVsRangeAdjustedResponse
	 */
	public function __construct($_GetHistoricalNAVsRangeAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalNAVsRangeAdjustedResult'=>$_GetHistoricalNAVsRangeAdjustedResult));
	}
	/**
	 * Set GetHistoricalNAVsRangeAdjustedResult
	 * @param FundNAVs GetHistoricalNAVsRangeAdjustedResult
	 * @return FundNAVs
	 */
	public function setGetHistoricalNAVsRangeAdjustedResult($_GetHistoricalNAVsRangeAdjustedResult)
	{
		return ($this->GetHistoricalNAVsRangeAdjustedResult = $_GetHistoricalNAVsRangeAdjustedResult);
	}
	/**
	 * Get GetHistoricalNAVsRangeAdjustedResult
	 * @return XiFundsTypeFundNAVs
	 */
	public function getGetHistoricalNAVsRangeAdjustedResult()
	{
		return $this->GetHistoricalNAVsRangeAdjustedResult;
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