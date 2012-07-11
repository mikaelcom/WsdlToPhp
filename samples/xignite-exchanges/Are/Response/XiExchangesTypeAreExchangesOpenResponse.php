<?php
/**
 * Class file for XiExchangesTypeAreExchangesOpenResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeAreExchangesOpenResponse
 * @date 08/07/2012
 */
class XiExchangesTypeAreExchangesOpenResponse extends XiExchangesWsdlClass
{
	/**
	 * The AreExchangesOpenResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeArrayOfExchangeStatus
	 */
	public $AreExchangesOpenResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeArrayOfExchangeStatus AreExchangesOpenResult
	 * @return XiExchangesTypeAreExchangesOpenResponse
	 */
	public function __construct($_AreExchangesOpenResult = null)
	{
		parent::__construct(array('AreExchangesOpenResult'=>new XiExchangesTypeArrayOfExchangeStatus($_AreExchangesOpenResult)));
	}
	/**
	 * Set AreExchangesOpenResult
	 * @param ArrayOfExchangeStatus AreExchangesOpenResult
	 * @return ArrayOfExchangeStatus
	 */
	public function setAreExchangesOpenResult($_AreExchangesOpenResult)
	{
		return ($this->AreExchangesOpenResult = $_AreExchangesOpenResult);
	}
	/**
	 * Get AreExchangesOpenResult
	 * @return XiExchangesTypeArrayOfExchangeStatus
	 */
	public function getAreExchangesOpenResult()
	{
		return $this->AreExchangesOpenResult;
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