<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetMultiFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetMultiFundamentalResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetMultiFundamentalResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetMultiFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeMultiFundamental
	 */
	public $GetMultiFundamentalResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeMultiFundamental GetMultiFundamentalResult
	 * @return XiGlobalFundamentalsTypeGetMultiFundamentalResponse
	 */
	public function __construct($_GetMultiFundamentalResult = null)
	{
		parent::__construct(array('GetMultiFundamentalResult'=>$_GetMultiFundamentalResult));
	}
	/**
	 * Set GetMultiFundamentalResult
	 * @param MultiFundamental GetMultiFundamentalResult
	 * @return MultiFundamental
	 */
	public function setGetMultiFundamentalResult($_GetMultiFundamentalResult)
	{
		return ($this->GetMultiFundamentalResult = $_GetMultiFundamentalResult);
	}
	/**
	 * Get GetMultiFundamentalResult
	 * @return XiGlobalFundamentalsTypeMultiFundamental
	 */
	public function getGetMultiFundamentalResult()
	{
		return $this->GetMultiFundamentalResult;
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