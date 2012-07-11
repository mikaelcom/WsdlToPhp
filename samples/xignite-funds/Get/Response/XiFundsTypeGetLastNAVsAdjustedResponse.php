<?php
/**
 * Class file for XiFundsTypeGetLastNAVsAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLastNAVsAdjustedResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLastNAVsAdjustedResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLastNAVsAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfFundNAV
	 */
	public $GetLastNAVsAdjustedResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfFundNAV GetLastNAVsAdjustedResult
	 * @return XiFundsTypeGetLastNAVsAdjustedResponse
	 */
	public function __construct($_GetLastNAVsAdjustedResult = null)
	{
		parent::__construct(array('GetLastNAVsAdjustedResult'=>new XiFundsTypeArrayOfFundNAV($_GetLastNAVsAdjustedResult)));
	}
	/**
	 * Set GetLastNAVsAdjustedResult
	 * @param ArrayOfFundNAV GetLastNAVsAdjustedResult
	 * @return ArrayOfFundNAV
	 */
	public function setGetLastNAVsAdjustedResult($_GetLastNAVsAdjustedResult)
	{
		return ($this->GetLastNAVsAdjustedResult = $_GetLastNAVsAdjustedResult);
	}
	/**
	 * Get GetLastNAVsAdjustedResult
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function getGetLastNAVsAdjustedResult()
	{
		return $this->GetLastNAVsAdjustedResult;
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