<?php
/**
 * Class file for XiFundsTypeGetLatestNAVsAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLatestNAVsAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLatestNAVsAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLatestNAVsAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfFundNAV
	 */
	public $GetLatestNAVsAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfFundNAV GetLatestNAVsAdjustedResult
	 * @return XiFundsTypeGetLatestNAVsAdjustedResponse
	 */
	public function __construct($_GetLatestNAVsAdjustedResult = null)
	{
		parent::__construct(array('GetLatestNAVsAdjustedResult'=>new XiFundsTypeArrayOfFundNAV($_GetLatestNAVsAdjustedResult)));
	}
	/**
	 * Set GetLatestNAVsAdjustedResult
	 * @param ArrayOfFundNAV GetLatestNAVsAdjustedResult
	 * @return ArrayOfFundNAV
	 */
	public function setGetLatestNAVsAdjustedResult($_GetLatestNAVsAdjustedResult)
	{
		return ($this->GetLatestNAVsAdjustedResult = $_GetLatestNAVsAdjustedResult);
	}
	/**
	 * Get GetLatestNAVsAdjustedResult
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function getGetLatestNAVsAdjustedResult()
	{
		return $this->GetLatestNAVsAdjustedResult;
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