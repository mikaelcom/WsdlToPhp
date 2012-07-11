<?php
/**
 * Class file for XiQuotesTypeListTopExchangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeListTopExchangesResponse
 * @date 08/07/2012
 */
class XiQuotesTypeListTopExchangesResponse extends XiQuotesWsdlClass
{
	/**
	 * The ListTopExchangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfTopExchange
	 */
	public $ListTopExchangesResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfTopExchange ListTopExchangesResult
	 * @return XiQuotesTypeListTopExchangesResponse
	 */
	public function __construct($_ListTopExchangesResult = null)
	{
		parent::__construct(array('ListTopExchangesResult'=>new XiQuotesTypeArrayOfTopExchange($_ListTopExchangesResult)));
	}
	/**
	 * Set ListTopExchangesResult
	 * @param ArrayOfTopExchange ListTopExchangesResult
	 * @return ArrayOfTopExchange
	 */
	public function setListTopExchangesResult($_ListTopExchangesResult)
	{
		return ($this->ListTopExchangesResult = $_ListTopExchangesResult);
	}
	/**
	 * Get ListTopExchangesResult
	 * @return XiQuotesTypeArrayOfTopExchange
	 */
	public function getListTopExchangesResult()
	{
		return $this->ListTopExchangesResult;
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