<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetPeriodFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetPeriodFundamentalResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetPeriodFundamentalResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetPeriodFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeFundamental
	 */
	public $GetPeriodFundamentalResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeFundamental GetPeriodFundamentalResult
	 * @return XiGlobalFundamentalsTypeGetPeriodFundamentalResponse
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
	 * @return XiGlobalFundamentalsTypeFundamental
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