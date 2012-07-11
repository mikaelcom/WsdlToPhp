<?php
/**
 * Class file for XiFundamentalsTypeGetFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFundamentalsResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFundamentalsResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfFundamental
	 */
	public $GetFundamentalsResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeArrayOfFundamental GetFundamentalsResult
	 * @return XiFundamentalsTypeGetFundamentalsResponse
	 */
	public function __construct($_GetFundamentalsResult = null)
	{
		parent::__construct(array('GetFundamentalsResult'=>new XiFundamentalsTypeArrayOfFundamental($_GetFundamentalsResult)));
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
	 * @return XiFundamentalsTypeArrayOfFundamental
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