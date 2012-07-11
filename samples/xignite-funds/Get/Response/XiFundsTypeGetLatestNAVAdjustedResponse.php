<?php
/**
 * Class file for XiFundsTypeGetLatestNAVAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLatestNAVAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLatestNAVAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLatestNAVAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAV
	 */
	public $GetLatestNAVAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAV GetLatestNAVAdjustedResult
	 * @return XiFundsTypeGetLatestNAVAdjustedResponse
	 */
	public function __construct($_GetLatestNAVAdjustedResult = null)
	{
		parent::__construct(array('GetLatestNAVAdjustedResult'=>$_GetLatestNAVAdjustedResult));
	}
	/**
	 * Set GetLatestNAVAdjustedResult
	 * @param FundNAV GetLatestNAVAdjustedResult
	 * @return FundNAV
	 */
	public function setGetLatestNAVAdjustedResult($_GetLatestNAVAdjustedResult)
	{
		return ($this->GetLatestNAVAdjustedResult = $_GetLatestNAVAdjustedResult);
	}
	/**
	 * Get GetLatestNAVAdjustedResult
	 * @return XiFundsTypeFundNAV
	 */
	public function getGetLatestNAVAdjustedResult()
	{
		return $this->GetLatestNAVAdjustedResult;
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