<?php
/**
 * Class file for XiRealTimeTypeGetRealQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealQuoteResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealQuoteResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeRealTimeQuote
	 */
	public $GetRealQuoteResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeRealTimeQuote GetRealQuoteResult
	 * @return XiRealTimeTypeGetRealQuoteResponse
	 */
	public function __construct($_GetRealQuoteResult = null)
	{
		parent::__construct(array('GetRealQuoteResult'=>$_GetRealQuoteResult));
	}
	/**
	 * Set GetRealQuoteResult
	 * @param RealTimeQuote GetRealQuoteResult
	 * @return RealTimeQuote
	 */
	public function setGetRealQuoteResult($_GetRealQuoteResult)
	{
		return ($this->GetRealQuoteResult = $_GetRealQuoteResult);
	}
	/**
	 * Get GetRealQuoteResult
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function getGetRealQuoteResult()
	{
		return $this->GetRealQuoteResult;
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