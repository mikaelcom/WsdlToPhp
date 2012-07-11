<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetFundamentalResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetFundamentalResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeFundamental
	 */
	public $GetFundamentalResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeFundamental GetFundamentalResult
	 * @return XiGlobalFundamentalsTypeGetFundamentalResponse
	 */
	public function __construct($_GetFundamentalResult = null)
	{
		parent::__construct(array('GetFundamentalResult'=>$_GetFundamentalResult));
	}
	/**
	 * Set GetFundamentalResult
	 * @param Fundamental GetFundamentalResult
	 * @return Fundamental
	 */
	public function setGetFundamentalResult($_GetFundamentalResult)
	{
		return ($this->GetFundamentalResult = $_GetFundamentalResult);
	}
	/**
	 * Get GetFundamentalResult
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function getGetFundamentalResult()
	{
		return $this->GetFundamentalResult;
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