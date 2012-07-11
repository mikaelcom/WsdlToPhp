<?php
/**
 * Class file for XiFundsTypeGetLatestNAVsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLatestNAVsResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLatestNAVsResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLatestNAVsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfFundNAV
	 */
	public $GetLatestNAVsResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfFundNAV GetLatestNAVsResult
	 * @return XiFundsTypeGetLatestNAVsResponse
	 */
	public function __construct($_GetLatestNAVsResult = null)
	{
		parent::__construct(array('GetLatestNAVsResult'=>new XiFundsTypeArrayOfFundNAV($_GetLatestNAVsResult)));
	}
	/**
	 * Set GetLatestNAVsResult
	 * @param ArrayOfFundNAV GetLatestNAVsResult
	 * @return ArrayOfFundNAV
	 */
	public function setGetLatestNAVsResult($_GetLatestNAVsResult)
	{
		return ($this->GetLatestNAVsResult = $_GetLatestNAVsResult);
	}
	/**
	 * Get GetLatestNAVsResult
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function getGetLatestNAVsResult()
	{
		return $this->GetLatestNAVsResult;
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