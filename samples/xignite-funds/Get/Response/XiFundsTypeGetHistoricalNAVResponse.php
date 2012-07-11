<?php
/**
 * Class file for XiFundsTypeGetHistoricalNAVResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetHistoricalNAVResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetHistoricalNAVResponse extends XiFundsWsdlClass
{
	/**
	 * The GetHistoricalNAVResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAV
	 */
	public $GetHistoricalNAVResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAV GetHistoricalNAVResult
	 * @return XiFundsTypeGetHistoricalNAVResponse
	 */
	public function __construct($_GetHistoricalNAVResult = null)
	{
		parent::__construct(array('GetHistoricalNAVResult'=>$_GetHistoricalNAVResult));
	}
	/**
	 * Set GetHistoricalNAVResult
	 * @param FundNAV GetHistoricalNAVResult
	 * @return FundNAV
	 */
	public function setGetHistoricalNAVResult($_GetHistoricalNAVResult)
	{
		return ($this->GetHistoricalNAVResult = $_GetHistoricalNAVResult);
	}
	/**
	 * Get GetHistoricalNAVResult
	 * @return XiFundsTypeFundNAV
	 */
	public function getGetHistoricalNAVResult()
	{
		return $this->GetHistoricalNAVResult;
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