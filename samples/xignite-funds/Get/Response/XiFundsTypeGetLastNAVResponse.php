<?php
/**
 * Class file for XiFundsTypeGetLastNAVResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLastNAVResponse
 * @date 08/07/2012
 */
class XiFundsTypeGetLastNAVResponse extends XiFundsWsdlClass
{
	/**
	 * The GetLastNAVResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundNAV
	 */
	public $GetLastNAVResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundNAV GetLastNAVResult
	 * @return XiFundsTypeGetLastNAVResponse
	 */
	public function __construct($_GetLastNAVResult = null)
	{
		parent::__construct(array('GetLastNAVResult'=>$_GetLastNAVResult));
	}
	/**
	 * Set GetLastNAVResult
	 * @param FundNAV GetLastNAVResult
	 * @return FundNAV
	 */
	public function setGetLastNAVResult($_GetLastNAVResult)
	{
		return ($this->GetLastNAVResult = $_GetLastNAVResult);
	}
	/**
	 * Get GetLastNAVResult
	 * @return XiFundsTypeFundNAV
	 */
	public function getGetLastNAVResult()
	{
		return $this->GetLastNAVResult;
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