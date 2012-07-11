<?php
/**
 * Class file for XiBATSRealTimeTypeGetRealQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeGetRealQuoteResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeGetRealQuoteResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The GetRealQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeRealQuote
	 */
	public $GetRealQuoteResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeRealQuote GetRealQuoteResult
	 * @return XiBATSRealTimeTypeGetRealQuoteResponse
	 */
	public function __construct($_GetRealQuoteResult = null)
	{
		parent::__construct(array('GetRealQuoteResult'=>$_GetRealQuoteResult));
	}
	/**
	 * Set GetRealQuoteResult
	 * @param RealQuote GetRealQuoteResult
	 * @return RealQuote
	 */
	public function setGetRealQuoteResult($_GetRealQuoteResult)
	{
		return ($this->GetRealQuoteResult = $_GetRealQuoteResult);
	}
	/**
	 * Get GetRealQuoteResult
	 * @return XiBATSRealTimeTypeRealQuote
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