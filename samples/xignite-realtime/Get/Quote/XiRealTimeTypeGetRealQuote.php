<?php
/**
 * Class file for XiRealTimeTypeGetRealQuote
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealQuote
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealQuote extends XiRealTimeWsdlClass
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
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
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
	 * @param string Symbol
	 * @param boolean IncludeBidAsk
	 * @return XiRealTimeTypeGetRealQuote
	 */
	public function __construct($_Exchange,$_Symbol = null,$_IncludeBidAsk)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'Symbol'=>$_Symbol,'IncludeBidAsk'=>$_IncludeBidAsk));
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
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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