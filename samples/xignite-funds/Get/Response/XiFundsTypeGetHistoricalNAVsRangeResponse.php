<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVsRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVsRangeResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVsRangeResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVsRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAVs
	 */
	public $GetHistoricalNAVsRangeResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAVs GetHistoricalNAVsRangeResult
	 * @return XiFundsTypeGetHistoricalNAVsRangeResponse
	 */
	public function __construct($_GetHistoricalNAVsRangeResult = null)
	{
		parent::__construct(array('GetHistoricalNAVsRangeResult'=>$_GetHistoricalNAVsRangeResult));
	}
	/**
	 * Set GetHistoricalNAVsRangeResult
	 * @param FundNAVs GetHistoricalNAVsRangeResult
	 * @return FundNAVs
	 */
	public function setGetHistoricalNAVsRangeResult($_GetHistoricalNAVsRangeResult)
	{
		return ($this->GetHistoricalNAVsRangeResult = $_GetHistoricalNAVsRangeResult);
	}
	/**
	 * Get GetHistoricalNAVsRangeResult
	 * @return XiFundsTypeFundNAVs
	 */
	public function getGetHistoricalNAVsRangeResult()
	{
		return $this->GetHistoricalNAVsRangeResult;
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