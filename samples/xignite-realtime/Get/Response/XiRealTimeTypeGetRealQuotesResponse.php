<?php
/**
 * Class file for XiRealTimeTypeGetRealQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealQuotesResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealQuotesResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfRealTimeQuote
	 */
	public $GetRealQuotesResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeArrayOfRealTimeQuote GetRealQuotesResult
	 * @return XiRealTimeTypeGetRealQuotesResponse
	 */
	public function __construct($_GetRealQuotesResult = null)
	{
		parent::__construct(array('GetRealQuotesResult'=>new XiRealTimeTypeArrayOfRealTimeQuote($_GetRealQuotesResult)));
	}
	/**
	 * Set GetRealQuotesResult
	 * @param ArrayOfRealTimeQuote GetRealQuotesResult
	 * @return ArrayOfRealTimeQuote
	 */
	public function setGetRealQuotesResult($_GetRealQuotesResult)
	{
		return ($this->GetRealQuotesResult = $_GetRealQuotesResult);
	}
	/**
	 * Get GetRealQuotesResult
	 * @return XiRealTimeTypeArrayOfRealTimeQuote
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