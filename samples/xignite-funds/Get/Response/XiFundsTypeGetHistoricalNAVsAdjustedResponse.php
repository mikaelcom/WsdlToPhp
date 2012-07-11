<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVsAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVsAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVsAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVsAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfFundNAV
	 */
	public $GetHistoricalNAVsAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfFundNAV GetHistoricalNAVsAdjustedResult
	 * @return XiFundsTypeGetHistoricalNAVsAdjustedResponse
	 */
	public function __construct($_GetHistoricalNAVsAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalNAVsAdjustedResult'=>new XiFundsTypeArrayOfFundNAV($_GetHistoricalNAVsAdjustedResult)));
	}
	/**
	 * Set GetHistoricalNAVsAdjustedResult
	 * @param ArrayOfFundNAV GetHistoricalNAVsAdjustedResult
	 * @return ArrayOfFundNAV
	 */
	public function setGetHistoricalNAVsAdjustedResult($_GetHistoricalNAVsAdjustedResult)
	{
		return ($this->GetHistoricalNAVsAdjustedResult = $_GetHistoricalNAVsAdjustedResult);
	}
	/**
	 * Get GetHistoricalNAVsAdjustedResult
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function getGetHistoricalNAVsAdjustedResult()
	{
		return $this->GetHistoricalNAVsAdjustedResult;
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