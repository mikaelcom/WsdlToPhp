<?php
/**
 * Class file for XiBATSRealTimeTypeGetRealQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeGetRealQuotesResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeGetRealQuotesResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The GetRealQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeArrayOfRealQuote
	 */
	public $GetRealQuotesResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeArrayOfRealQuote GetRealQuotesResult
	 * @return XiBATSRealTimeTypeGetRealQuotesResponse
	 */
	public function __construct($_GetRealQuotesResult = null)
	{
		parent::__construct(array('GetRealQuotesResult'=>new XiBATSRealTimeTypeArrayOfRealQuote($_GetRealQuotesResult)));
	}
	/**
	 * Set GetRealQuotesResult
	 * @param ArrayOfRealQuote GetRealQuotesResult
	 * @return ArrayOfRealQuote
	 */
	public function setGetRealQuotesResult($_GetRealQuotesResult)
	{
		return ($this->GetRealQuotesResult = $_GetRealQuotesResult);
	}
	/**
	 * Get GetRealQuotesResult
	 * @return XiBATSRealTimeTypeArrayOfRealQuote
	 */
	public function getGetRealQuotesResult()
	{
		return $this->GetRealQuotesResult;
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