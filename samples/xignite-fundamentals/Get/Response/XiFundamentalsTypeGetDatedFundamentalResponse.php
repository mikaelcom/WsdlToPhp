<?php
/**
 * Class file for XiFundamentalsTypeGetDatedFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetDatedFundamentalResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetDatedFundamentalResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetDatedFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamental
	 */
	public $GetDatedFundamentalResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamental GetDatedFundamentalResult
	 * @return XiFundamentalsTypeGetDatedFundamentalResponse
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
	 * @return XiFundamentalsTypeFundamental
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