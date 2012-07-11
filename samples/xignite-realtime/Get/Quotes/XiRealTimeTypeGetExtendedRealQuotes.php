<?php
/**
 * Class file for XiRealTimeTypeGetExtendedRealQuotes
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetExtendedRealQuotes
 * @date 08/07/2012
 */
class XiRealTimeTypeGetExtendedRealQuotes extends XiRealTimeWsdlClass
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
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
	/**
	 * Constructor
	 * @param XiRealTimeTypeECNTypes Exchange
	 * @param string Symbols
	 * @return XiRealTimeTypeGetExtendedRealQuotes
	 */
	public function __construct($_Exchange,$_Symbols = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'Symbols'=>$_Symbols));
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
	 * Set Symbols
	 * @param string Symbols
	 * @return string
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return string
	 */
	public function getSymbols()
	{
		return $this->Symbols;
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