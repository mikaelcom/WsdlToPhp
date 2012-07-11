<?php
/**
 * Class file for XiFundamentalsTypeGetPeriodFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetPeriodFundamentalResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetPeriodFundamentalResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetPeriodFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamental
	 */
	public $GetPeriodFundamentalResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamental GetPeriodFundamentalResult
	 * @return XiFundamentalsTypeGetPeriodFundamentalResponse
	 */
	public function __construct($_GetPeriodFundamentalResult = null)
	{
		parent::__construct(array('GetPeriodFundamentalResult'=>$_GetPeriodFundamentalResult));
	}
	/**
	 * Set GetPeriodFundamentalResult
	 * @param Fundamental GetPeriodFundamentalResult
	 * @return Fundamental
	 */
	public function setGetPeriodFundamentalResult($_GetPeriodFundamentalResult)
	{
		return ($this->GetPeriodFundamentalResult = $_GetPeriodFundamentalResult);
	}
	/**
	 * Get GetPeriodFundamentalResult
	 * @return XiFundamentalsTypeFundamental
	 */
	public function getGetPeriodFundamentalResult()
	{
		return $this->GetPeriodFundamentalResult;
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