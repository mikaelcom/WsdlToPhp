<?php
/**
 * Class file for XiFundamentalsTypeGetFourFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFourFundamentalsResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFourFundamentalsResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetFourFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeMultiFundamental
	 */
	public $GetFourFundamentalsResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeMultiFundamental GetFourFundamentalsResult
	 * @return XiFundamentalsTypeGetFourFundamentalsResponse
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
	 * @return XiFundamentalsTypeMultiFundamental
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