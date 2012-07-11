<?php
/**
 * Class file for XiQuotesTypeGetTopsByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTopsByExchangeResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTopsByExchangeResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTopsByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfTop
	 */
	public $GetTopsByExchangeResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfTop GetTopsByExchangeResult
	 * @return XiQuotesTypeGetTopsByExchangeResponse
	 */
	public function __construct($_GetTopsByExchangeResult = null)
	{
		parent::__construct(array('GetTopsByExchangeResult'=>new XiQuotesTypeArrayOfTop($_GetTopsByExchangeResult)));
	}
	/**
	 * Set GetTopsByExchangeResult
	 * @param ArrayOfTop GetTopsByExchangeResult
	 * @return ArrayOfTop
	 */
	public function setGetTopsByExchangeResult($_GetTopsByExchangeResult)
	{
		return ($this->GetTopsByExchangeResult = $_GetTopsByExchangeResult);
	}
	/**
	 * Get GetTopsByExchangeResult
	 * @return XiQuotesTypeArrayOfTop
	 */
	public function getGetTopsByExchangeResult()
	{
		return $this->GetTopsByExchangeResult;
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