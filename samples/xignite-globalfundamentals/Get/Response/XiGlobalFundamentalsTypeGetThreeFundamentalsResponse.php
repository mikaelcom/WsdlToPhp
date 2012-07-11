<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetThreeFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetThreeFundamentalsResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetThreeFundamentalsResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetThreeFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeMultiFundamental
	 */
	public $GetThreeFundamentalsResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeMultiFundamental GetThreeFundamentalsResult
	 * @return XiGlobalFundamentalsTypeGetThreeFundamentalsResponse
	 */
	public function __construct($_GetThreeFundamentalsResult = null)
	{
		parent::__construct(array('GetThreeFundamentalsResult'=>$_GetThreeFundamentalsResult));
	}
	/**
	 * Set GetThreeFundamentalsResult
	 * @param MultiFundamental GetThreeFundamentalsResult
	 * @return MultiFundamental
	 */
	public function setGetThreeFundamentalsResult($_GetThreeFundamentalsResult)
	{
		return ($this->GetThreeFundamentalsResult = $_GetThreeFundamentalsResult);
	}
	/**
	 * Get GetThreeFundamentalsResult
	 * @return XiGlobalFundamentalsTypeMultiFundamental
	 */
	public function getGetThreeFundamentalsResult()
	{
		return $this->GetThreeFundamentalsResult;
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