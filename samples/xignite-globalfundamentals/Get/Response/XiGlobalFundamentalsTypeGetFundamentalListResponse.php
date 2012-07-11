<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetFundamentalListResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetFundamentalListResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetFundamentalListResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeFundamentalList
	 */
	public $GetFundamentalListResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeFundamentalList GetFundamentalListResult
	 * @return XiGlobalFundamentalsTypeGetFundamentalListResponse
	 */
	public function __construct($_GetFundamentalListResult = null)
	{
		parent::__construct(array('GetFundamentalListResult'=>$_GetFundamentalListResult));
	}
	/**
	 * Set GetFundamentalListResult
	 * @param FundamentalList GetFundamentalListResult
	 * @return FundamentalList
	 */
	public function setGetFundamentalListResult($_GetFundamentalListResult)
	{
		return ($this->GetFundamentalListResult = $_GetFundamentalListResult);
	}
	/**
	 * Get GetFundamentalListResult
	 * @return XiGlobalFundamentalsTypeFundamentalList
	 */
	public function getGetFundamentalListResult()
	{
		return $this->GetFundamentalListResult;
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