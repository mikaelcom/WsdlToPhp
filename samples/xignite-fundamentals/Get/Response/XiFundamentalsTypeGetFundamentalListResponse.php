<?php
/**
 * Class file for XiFundamentalsTypeGetFundamentalListResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFundamentalListResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFundamentalListResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalList
	 */
	public $GetFundamentalListResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamentalList GetFundamentalListResult
	 * @return XiFundamentalsTypeGetFundamentalListResponse
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
	 * @return XiFundamentalsTypeFundamentalList
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