<?php
/**
 * Class file for XiFundsTypeGetLatestNAVResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLatestNAVResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLatestNAVResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLatestNAVResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAV
	 */
	public $GetLatestNAVResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAV GetLatestNAVResult
	 * @return XiFundsTypeGetLatestNAVResponse
	 */
	public function __construct($_GetLatestNAVResult = null)
	{
		parent::__construct(array('GetLatestNAVResult'=>$_GetLatestNAVResult));
	}
	/**
	 * Set GetLatestNAVResult
	 * @param FundNAV GetLatestNAVResult
	 * @return FundNAV
	 */
	public function setGetLatestNAVResult($_GetLatestNAVResult)
	{
		return ($this->GetLatestNAVResult = $_GetLatestNAVResult);
	}
	/**
	 * Get GetLatestNAVResult
	 * @return XiFundsTypeFundNAV
	 */
	public function getGetLatestNAVResult()
	{
		return $this->GetLatestNAVResult;
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