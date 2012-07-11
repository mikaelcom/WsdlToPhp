<?php
/**
 * Class file for XiQuotesTypeGetMissingTickRangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetMissingTickRangesResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetMissingTickRangesResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetMissingTickRangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfMissingTickRange
	 */
	public $GetMissingTickRangesResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfMissingTickRange GetMissingTickRangesResult
	 * @return XiQuotesTypeGetMissingTickRangesResponse
	 */
	public function __construct($_GetMissingTickRangesResult = null)
	{
		parent::__construct(array('GetMissingTickRangesResult'=>new XiQuotesTypeArrayOfMissingTickRange($_GetMissingTickRangesResult)));
	}
	/**
	 * Set GetMissingTickRangesResult
	 * @param ArrayOfMissingTickRange GetMissingTickRangesResult
	 * @return ArrayOfMissingTickRange
	 */
	public function setGetMissingTickRangesResult($_GetMissingTickRangesResult)
	{
		return ($this->GetMissingTickRangesResult = $_GetMissingTickRangesResult);
	}
	/**
	 * Get GetMissingTickRangesResult
	 * @return XiQuotesTypeArrayOfMissingTickRange
	 */
	public function getGetMissingTickRangesResult()
	{
		return $this->GetMissingTickRangesResult;
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