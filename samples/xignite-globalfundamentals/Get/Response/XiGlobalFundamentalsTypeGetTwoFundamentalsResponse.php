<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetTwoFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetTwoFundamentalsResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetTwoFundamentalsResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetTwoFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeMultiFundamental
	 */
	public $GetTwoFundamentalsResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeMultiFundamental GetTwoFundamentalsResult
	 * @return XiGlobalFundamentalsTypeGetTwoFundamentalsResponse
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
	 * @return XiGlobalFundamentalsTypeMultiFundamental
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