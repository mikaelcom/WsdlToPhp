<?php
/**
 * Class file for XiRealTimeTypeGetRealQuotes
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealQuotes
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealQuotes extends XiRealTimeWsdlClass
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
	 * The IncludeBidAsk
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IncludeBidAsk;
	/**
	 * Constructor
	 * @param XiRealTimeTypeECNTypes Exchange
	 * @param string Symbols
	 * @param boolean IncludeBidAsk
	 * @return XiRealTimeTypeGetRealQuotes
	 */
	public function __construct($_Exchange,$_Symbols = null,$_IncludeBidAsk)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'Symbols'=>$_Symbols,'IncludeBidAsk'=>$_IncludeBidAsk));
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
	 * Set IncludeBidAsk
	 * @param boolean IncludeBidAsk
	 * @return boolean
	 */
	public function setIncludeBidAsk($_IncludeBidAsk)
	{
		return ($this->IncludeBidAsk = $_IncludeBidAsk);
	}
	/**
	 * Get IncludeBidAsk
	 * @return boolean
	 */
	public function getIncludeBidAsk()
	{
		return $this->IncludeBidAsk;
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