<?php
/**
 * Class file for XiFundsTypeGetLastNAVsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLastNAVsResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLastNAVsResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLastNAVsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfFundNAV
	 */
	public $GetLastNAVsResult;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfFundNAV GetLastNAVsResult
	 * @return XiFundsTypeGetLastNAVsResponse
	 */
	public function __construct($_GetLastNAVsResult = null)
	{
		parent::__construct(array('GetLastNAVsResult'=>new XiFundsTypeArrayOfFundNAV($_GetLastNAVsResult)));
	}
	/**
	 * Set GetLastNAVsResult
	 * @param ArrayOfFundNAV GetLastNAVsResult
	 * @return ArrayOfFundNAV
	 */
	public function setGetLastNAVsResult($_GetLastNAVsResult)
	{
		return ($this->GetLastNAVsResult = $_GetLastNAVsResult);
	}
	/**
	 * Get GetLastNAVsResult
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function getGetLastNAVsResult()
	{
		return $this->GetLastNAVsResult;
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