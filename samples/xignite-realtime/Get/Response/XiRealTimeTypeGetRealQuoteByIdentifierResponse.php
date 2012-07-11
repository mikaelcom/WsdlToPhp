<?php
/**
 * Class file for XiRealTimeTypeGetRealQuoteByIdentifierResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealQuoteByIdentifierResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealQuoteByIdentifierResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealQuoteByIdentifierResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeRealTimeQuote
	 */
	public $GetRealQuoteByIdentifierResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeRealTimeQuote GetRealQuoteByIdentifierResult
	 * @return XiRealTimeTypeGetRealQuoteByIdentifierResponse
	 */
	public function __construct($_GetRealQuoteByIdentifierResult = null)
	{
		parent::__construct(array('GetRealQuoteByIdentifierResult'=>$_GetRealQuoteByIdentifierResult));
	}
	/**
	 * Set GetRealQuoteByIdentifierResult
	 * @param RealTimeQuote GetRealQuoteByIdentifierResult
	 * @return RealTimeQuote
	 */
	public function setGetRealQuoteByIdentifierResult($_GetRealQuoteByIdentifierResult)
	{
		return ($this->GetRealQuoteByIdentifierResult = $_GetRealQuoteByIdentifierResult);
	}
	/**
	 * Get GetRealQuoteByIdentifierResult
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function getGetRealQuoteByIdentifierResult()
	{
		return $this->GetRealQuoteByIdentifierResult;
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