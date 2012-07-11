<?php
/**
 * Class file for XiRealTimeTypeGetExtendedRealQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetExtendedRealQuoteResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetExtendedRealQuoteResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetExtendedRealQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeExtendedRealTimeQuote
	 */
	public $GetExtendedRealQuoteResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeExtendedRealTimeQuote GetExtendedRealQuoteResult
	 * @return XiRealTimeTypeGetExtendedRealQuoteResponse
	 */
	public function __construct($_GetExtendedRealQuoteResult = null)
	{
		parent::__construct(array('GetExtendedRealQuoteResult'=>$_GetExtendedRealQuoteResult));
	}
	/**
	 * Set GetExtendedRealQuoteResult
	 * @param ExtendedRealTimeQuote GetExtendedRealQuoteResult
	 * @return ExtendedRealTimeQuote
	 */
	public function setGetExtendedRealQuoteResult($_GetExtendedRealQuoteResult)
	{
		return ($this->GetExtendedRealQuoteResult = $_GetExtendedRealQuoteResult);
	}
	/**
	 * Get GetExtendedRealQuoteResult
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function getGetExtendedRealQuoteResult()
	{
		return $this->GetExtendedRealQuoteResult;
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