<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetDatedFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetDatedFundamentalResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetDatedFundamentalResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetDatedFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeFundamental
	 */
	public $GetDatedFundamentalResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeFundamental GetDatedFundamentalResult
	 * @return XiGlobalFundamentalsTypeGetDatedFundamentalResponse
	 */
	public function __construct($_GetDatedFundamentalResult = null)
	{
		parent::__construct(array('GetDatedFundamentalResult'=>$_GetDatedFundamentalResult));
	}
	/**
	 * Set GetDatedFundamentalResult
	 * @param Fundamental GetDatedFundamentalResult
	 * @return Fundamental
	 */
	public function setGetDatedFundamentalResult($_GetDatedFundamentalResult)
	{
		return ($this->GetDatedFundamentalResult = $_GetDatedFundamentalResult);
	}
	/**
	 * Get GetDatedFundamentalResult
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function getGetDatedFundamentalResult()
	{
		return $this->GetDatedFundamentalResult;
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