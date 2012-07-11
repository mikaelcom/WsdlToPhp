<?php
/**
 * Class file for XiFundamentalsTypeGetTwoFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetTwoFundamentalsResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetTwoFundamentalsResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetTwoFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeMultiFundamental
	 */
	public $GetTwoFundamentalsResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeMultiFundamental GetTwoFundamentalsResult
	 * @return XiFundamentalsTypeGetTwoFundamentalsResponse
	 */
	public function __construct($_GetTwoFundamentalsResult = null)
	{
		parent::__construct(array('GetTwoFundamentalsResult'=>$_GetTwoFundamentalsResult));
	}
	/**
	 * Set GetTwoFundamentalsResult
	 * @param MultiFundamental GetTwoFundamentalsResult
	 * @return MultiFundamental
	 */
	public function setGetTwoFundamentalsResult($_GetTwoFundamentalsResult)
	{
		return ($this->GetTwoFundamentalsResult = $_GetTwoFundamentalsResult);
	}
	/**
	 * Get GetTwoFundamentalsResult
	 * @return XiFundamentalsTypeMultiFundamental
	 */
	public function getGetTwoFundamentalsResult()
	{
		return $this->GetTwoFundamentalsResult;
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