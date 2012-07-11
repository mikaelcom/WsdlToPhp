<?php
/**
 * Class file for XiGlobalFundamentalsTypeListCompanies
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeListCompanies
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeListCompanies extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeExchangeTypes
	 */
	public $Exchange;
	/**
	 * The StartSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartSymbol;
	/**
	 * The EndSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndSymbol;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeExchangeTypes Exchange
	 * @param string StartSymbol
	 * @param string EndSymbol
	 * @return XiGlobalFundamentalsTypeListCompanies
	 */
	public function __construct($_Exchange,$_StartSymbol = null,$_EndSymbol = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'StartSymbol'=>$_StartSymbol,'EndSymbol'=>$_EndSymbol));
	}
	/**
	 * Set Exchange
	 * @param ExchangeTypes Exchange
	 * @return ExchangeTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiGlobalFundamentalsTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiGlobalFundamentalsTypeExchangeTypes
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set StartSymbol
	 * @param string StartSymbol
	 * @return string
	 */
	public function setStartSymbol($_StartSymbol)
	{
		return ($this->StartSymbol = $_StartSymbol);
	}
	/**
	 * Get StartSymbol
	 * @return string
	 */
	public function getStartSymbol()
	{
		return $this->StartSymbol;
	}
	/**
	 * Set EndSymbol
	 * @param string EndSymbol
	 * @return string
	 */
	public function setEndSymbol($_EndSymbol)
	{
		return ($this->EndSymbol = $_EndSymbol);
	}
	/**
	 * Get EndSymbol
	 * @return string
	 */
	public function getEndSymbol()
	{
		return $this->EndSymbol;
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