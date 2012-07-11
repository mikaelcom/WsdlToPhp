<?php
/**
 * Class file for XiRealTimeTypeGetExchangeTime
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetExchangeTime
 * @date 08/07/2012
 */
class XiRealTimeTypeGetExchangeTime extends XiRealTimeWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeECNTypes
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param XiRealTimeTypeECNTypes Exchange
	 * @return XiRealTimeTypeGetExchangeTime
	 */
	public function __construct($_Exchange)
	{
		parent::__construct(array('Exchange'=>$_Exchange));
	}
	/**
	 * Set Exchange
	 * @param ECNTypes Exchange
	 * @return ECNTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiRealTimeTypeECNTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiRealTimeTypeECNTypes
	 */
	public function getExchange()
	{
		return $this->Exchange;
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