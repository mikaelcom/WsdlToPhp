<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetFundamentalListAsStringResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetFundamentalListAsStringResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetFundamentalListAsStringResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalListAsStringResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeFundamentalList
	 */
	public $GetFundamentalListAsStringResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeFundamentalList GetFundamentalListAsStringResult
	 * @return XiGlobalFundamentalsTypeGetFundamentalListAsStringResponse
	 */
	public function __construct($_GetFundamentalListAsStringResult = null)
	{
		parent::__construct(array('GetFundamentalListAsStringResult'=>$_GetFundamentalListAsStringResult));
	}
	/**
	 * Set GetFundamentalListAsStringResult
	 * @param FundamentalList GetFundamentalListAsStringResult
	 * @return FundamentalList
	 */
	public function setGetFundamentalListAsStringResult($_GetFundamentalListAsStringResult)
	{
		return ($this->GetFundamentalListAsStringResult = $_GetFundamentalListAsStringResult);
	}
	/**
	 * Get GetFundamentalListAsStringResult
	 * @return XiGlobalFundamentalsTypeFundamentalList
	 */
	public function getGetFundamentalListAsStringResult()
	{
		return $this->GetFundamentalListAsStringResult;
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