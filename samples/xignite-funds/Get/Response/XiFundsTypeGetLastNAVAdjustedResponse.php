<?php
/**
 * Class file for XiFundsTypeGetLastNAVAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLastNAVAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLastNAVAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLastNAVAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAV
	 */
	public $GetLastNAVAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAV GetLastNAVAdjustedResult
	 * @return XiFundsTypeGetLastNAVAdjustedResponse
	 */
	public function __construct($_GetLastNAVAdjustedResult = null)
	{
		parent::__construct(array('GetLastNAVAdjustedResult'=>$_GetLastNAVAdjustedResult));
	}
	/**
	 * Set GetLastNAVAdjustedResult
	 * @param FundNAV GetLastNAVAdjustedResult
	 * @return FundNAV
	 */
	public function setGetLastNAVAdjustedResult($_GetLastNAVAdjustedResult)
	{
		return ($this->GetLastNAVAdjustedResult = $_GetLastNAVAdjustedResult);
	}
	/**
	 * Get GetLastNAVAdjustedResult
	 * @return XiFundsTypeFundNAV
	 */
	public function getGetLastNAVAdjustedResult()
	{
		return $this->GetLastNAVAdjustedResult;
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