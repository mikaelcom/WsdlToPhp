<?php
/**
 * Class file for XiRealTimeTypeGetExtendedRealQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetExtendedRealQuotesResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetExtendedRealQuotesResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetExtendedRealQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfExtendedRealTimeQuote
	 */
	public $GetExtendedRealQuotesResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeArrayOfExtendedRealTimeQuote GetExtendedRealQuotesResult
	 * @return XiRealTimeTypeGetExtendedRealQuotesResponse
	 */
	public function __construct($_GetExtendedRealQuotesResult = null)
	{
		parent::__construct(array('GetExtendedRealQuotesResult'=>new XiRealTimeTypeArrayOfExtendedRealTimeQuote($_GetExtendedRealQuotesResult)));
	}
	/**
	 * Set GetExtendedRealQuotesResult
	 * @param ArrayOfExtendedRealTimeQuote GetExtendedRealQuotesResult
	 * @return ArrayOfExtendedRealTimeQuote
	 */
	public function setGetExtendedRealQuotesResult($_GetExtendedRealQuotesResult)
	{
		return ($this->GetExtendedRealQuotesResult = $_GetExtendedRealQuotesResult);
	}
	/**
	 * Get GetExtendedRealQuotesResult
	 * @return XiRealTimeTypeArrayOfExtendedRealTimeQuote
	 */
	public function getGetExtendedRealQuotesResult()
	{
		return $this->GetExtendedRealQuotesResult;
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