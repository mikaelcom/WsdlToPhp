<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAV
	 */
	public $GetHistoricalNAVAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAV GetHistoricalNAVAdjustedResult
	 * @return XiFundsTypeGetHistoricalNAVAdjustedResponse
	 */
	public function __construct($_GetHistoricalNAVAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalNAVAdjustedResult'=>$_GetHistoricalNAVAdjustedResult));
	}
	/**
	 * Set GetHistoricalNAVAdjustedResult
	 * @param FundNAV GetHistoricalNAVAdjustedResult
	 * @return FundNAV
	 */
	public function setGetHistoricalNAVAdjustedResult($_GetHistoricalNAVAdjustedResult)
	{
		return ($this->GetHistoricalNAVAdjustedResult = $_GetHistoricalNAVAdjustedResult);
	}
	/**
	 * Get GetHistoricalNAVAdjustedResult
	 * @return XiFundsTypeFundNAV
	 */
	public function getGetHistoricalNAVAdjustedResult()
	{
		return $this->GetHistoricalNAVAdjustedResult;
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