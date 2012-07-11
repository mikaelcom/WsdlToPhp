<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetFourFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetFourFundamentalsResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetFourFundamentalsResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetFourFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeMultiFundamental
	 */
	public $GetFourFundamentalsResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeMultiFundamental GetFourFundamentalsResult
	 * @return XiGlobalFundamentalsTypeGetFourFundamentalsResponse
	 */
	public function __construct($_GetFourFundamentalsResult = null)
	{
		parent::__construct(array('GetFourFundamentalsResult'=>$_GetFourFundamentalsResult));
	}
	/**
	 * Set GetFourFundamentalsResult
	 * @param MultiFundamental GetFourFundamentalsResult
	 * @return MultiFundamental
	 */
	public function setGetFourFundamentalsResult($_GetFourFundamentalsResult)
	{
		return ($this->GetFourFundamentalsResult = $_GetFourFundamentalsResult);
	}
	/**
	 * Get GetFourFundamentalsResult
	 * @return XiGlobalFundamentalsTypeMultiFundamental
	 */
	public function getGetFourFundamentalsResult()
	{
		return $this->GetFourFundamentalsResult;
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