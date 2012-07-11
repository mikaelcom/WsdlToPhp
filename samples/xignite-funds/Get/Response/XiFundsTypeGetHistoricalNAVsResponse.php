<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVsResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVsResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfFundNAV
	 */
	public $GetHistoricalNAVsResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfFundNAV GetHistoricalNAVsResult
	 * @return XiFundsTypeGetHistoricalNAVsResponse
	 */
	public function __construct($_GetHistoricalNAVsResult = null)
	{
		parent::__construct(array('GetHistoricalNAVsResult'=>new XiFundsTypeArrayOfFundNAV($_GetHistoricalNAVsResult)));
	}
	/**
	 * Set GetHistoricalNAVsResult
	 * @param ArrayOfFundNAV GetHistoricalNAVsResult
	 * @return ArrayOfFundNAV
	 */
	public function setGetHistoricalNAVsResult($_GetHistoricalNAVsResult)
	{
		return ($this->GetHistoricalNAVsResult = $_GetHistoricalNAVsResult);
	}
	/**
	 * Get GetHistoricalNAVsResult
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function getGetHistoricalNAVsResult()
	{
		return $this->GetHistoricalNAVsResult;
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