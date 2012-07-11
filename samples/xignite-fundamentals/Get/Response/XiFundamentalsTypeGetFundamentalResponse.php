<?php
/**
 * Class file for XiFundamentalsTypeGetFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFundamentalResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFundamentalResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamental
	 */
	public $GetFundamentalResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamental GetFundamentalResult
	 * @return XiFundamentalsTypeGetFundamentalResponse
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
	 * @return XiFundamentalsTypeFundamental
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