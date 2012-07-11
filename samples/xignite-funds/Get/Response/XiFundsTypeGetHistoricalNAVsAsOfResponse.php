<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVsAsOfResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVsAsOfResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVsAsOfResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVsAsOfResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAVs
	 */
	public $GetHistoricalNAVsAsOfResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAVs GetHistoricalNAVsAsOfResult
	 * @return XiFundsTypeGetHistoricalNAVsAsOfResponse
	 */
	public function __construct($_GetHistoricalNAVsAsOfResult = null)
	{
		parent::__construct(array('GetHistoricalNAVsAsOfResult'=>$_GetHistoricalNAVsAsOfResult));
	}
	/**
	 * Set GetHistoricalNAVsAsOfResult
	 * @param FundNAVs GetHistoricalNAVsAsOfResult
	 * @return FundNAVs
	 */
	public function setGetHistoricalNAVsAsOfResult($_GetHistoricalNAVsAsOfResult)
	{
		return ($this->GetHistoricalNAVsAsOfResult = $_GetHistoricalNAVsAsOfResult);
	}
	/**
	 * Get GetHistoricalNAVsAsOfResult
	 * @return XiFundsTypeFundNAVs
	 */
	public function getGetHistoricalNAVsAsOfResult()
	{
		return $this->GetHistoricalNAVsAsOfResult;
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