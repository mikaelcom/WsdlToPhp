<?php
/**
 * Class file for XiExchangesTypeIsValidExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeIsValidExchangeResponse
 * @date 08/07/2012
 */
class XiExchangesTypeIsValidExchangeResponse extends XiExchangesWsdlClass
{
	/**
	 * The IsValidExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeExchange
	 */
	public $IsValidExchangeResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchange IsValidExchangeResult
	 * @return XiExchangesTypeIsValidExchangeResponse
	 */
	public function __construct($_IsValidExchangeResult = null)
	{
		parent::__construct(array('IsValidExchangeResult'=>$_IsValidExchangeResult));
	}
	/**
	 * Set IsValidExchangeResult
	 * @param Exchange IsValidExchangeResult
	 * @return Exchange
	 */
	public function setIsValidExchangeResult($_IsValidExchangeResult)
	{
		return ($this->IsValidExchangeResult = $_IsValidExchangeResult);
	}
	/**
	 * Get IsValidExchangeResult
	 * @return XiExchangesTypeExchange
	 */
	public function getIsValidExchangeResult()
	{
		return $this->IsValidExchangeResult;
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