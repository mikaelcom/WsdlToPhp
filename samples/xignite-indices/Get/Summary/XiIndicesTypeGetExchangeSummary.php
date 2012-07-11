<?php
/**
 * Class file for XiIndicesTypeGetExchangeSummary
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetExchangeSummary
 * @date 08/07/2012
 */
class XiIndicesTypeGetExchangeSummary extends XiIndicesWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeExchangeTypes
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param XiIndicesTypeExchangeTypes Exchange
	 * @return XiIndicesTypeGetExchangeSummary
	 */
	public function __construct($_Exchange)
	{
		parent::__construct(array('Exchange'=>$_Exchange));
	}
	/**
	 * Set Exchange
	 * @param ExchangeTypes Exchange
	 * @return ExchangeTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiIndicesTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiIndicesTypeExchangeTypes
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