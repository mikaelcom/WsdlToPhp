<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVsAsOfAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVsAsOfAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVsAsOfAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVsAsOfAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAVs
	 */
	public $GetHistoricalNAVsAsOfAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAVs GetHistoricalNAVsAsOfAdjustedResult
	 * @return XiFundsTypeGetHistoricalNAVsAsOfAdjustedResponse
	 */
	public function __construct($_GetHistoricalNAVsAsOfAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalNAVsAsOfAdjustedResult'=>$_GetHistoricalNAVsAsOfAdjustedResult));
	}
	/**
	 * Set GetHistoricalNAVsAsOfAdjustedResult
	 * @param FundNAVs GetHistoricalNAVsAsOfAdjustedResult
	 * @return FundNAVs
	 */
	public function setGetHistoricalNAVsAsOfAdjustedResult($_GetHistoricalNAVsAsOfAdjustedResult)
	{
		return ($this->GetHistoricalNAVsAsOfAdjustedResult = $_GetHistoricalNAVsAsOfAdjustedResult);
	}
	/**
	 * Get GetHistoricalNAVsAsOfAdjustedResult
	 * @return XiFundsTypeFundNAVs
	 */
	public function getGetHistoricalNAVsAsOfAdjustedResult()
	{
		return $this->GetHistoricalNAVsAsOfAdjustedResult;
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