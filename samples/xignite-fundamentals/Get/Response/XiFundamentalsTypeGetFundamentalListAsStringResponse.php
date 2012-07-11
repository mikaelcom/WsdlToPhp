<?php
/**
 * Class file for XiFundamentalsTypeGetFundamentalListAsStringResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFundamentalListAsStringResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFundamentalListAsStringResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalListAsStringResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalList
	 */
	public $GetFundamentalListAsStringResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamentalList GetFundamentalListAsStringResult
	 * @return XiFundamentalsTypeGetFundamentalListAsStringResponse
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
	 * @return XiFundamentalsTypeFundamentalList
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