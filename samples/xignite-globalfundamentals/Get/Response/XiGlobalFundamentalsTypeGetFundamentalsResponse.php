<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetFundamentalsResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetFundamentalsResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeArrayOfFundamental
	 */
	public $GetFundamentalsResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeArrayOfFundamental GetFundamentalsResult
	 * @return XiGlobalFundamentalsTypeGetFundamentalsResponse
	 */
	public function __construct($_GetFundamentalsResult = null)
	{
		parent::__construct(array('GetFundamentalsResult'=>new XiGlobalFundamentalsTypeArrayOfFundamental($_GetFundamentalsResult)));
	}
	/**
	 * Set GetFundamentalsResult
	 * @param ArrayOfFundamental GetFundamentalsResult
	 * @return ArrayOfFundamental
	 */
	public function setGetFundamentalsResult($_GetFundamentalsResult)
	{
		return ($this->GetFundamentalsResult = $_GetFundamentalsResult);
	}
	/**
	 * Get GetFundamentalsResult
	 * @return XiGlobalFundamentalsTypeArrayOfFundamental
	 */
	public function getGetFundamentalsResult()
	{
		return $this->GetFundamentalsResult;
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