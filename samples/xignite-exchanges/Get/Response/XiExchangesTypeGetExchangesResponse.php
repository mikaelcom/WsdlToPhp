<?php
/**
 * Class file for XiExchangesTypeGetExchangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangesResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangesResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeArrayOfExchange
	 */
	public $GetExchangesResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeArrayOfExchange GetExchangesResult
	 * @return XiExchangesTypeGetExchangesResponse
	 */
	public function __construct($_GetExchangesResult = null)
	{
		parent::__construct(array('GetExchangesResult'=>new XiExchangesTypeArrayOfExchange($_GetExchangesResult)));
	}
	/**
	 * Set GetExchangesResult
	 * @param ArrayOfExchange GetExchangesResult
	 * @return ArrayOfExchange
	 */
	public function setGetExchangesResult($_GetExchangesResult)
	{
		return ($this->GetExchangesResult = $_GetExchangesResult);
	}
	/**
	 * Get GetExchangesResult
	 * @return XiExchangesTypeArrayOfExchange
	 */
	public function getGetExchangesResult()
	{
		return $this->GetExchangesResult;
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