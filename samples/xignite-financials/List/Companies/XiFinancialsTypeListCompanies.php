<?php
/**
 * Class file for XiFinancialsTypeListCompanies
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeListCompanies
 * @date 08/07/2012
 */
class XiFinancialsTypeListCompanies extends XiFinancialsWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeExchangeTypes
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
	 * @param XiFinancialsTypeExchangeTypes Exchange
	 * @param string StartSymbol
	 * @param string EndSymbol
	 * @return XiFinancialsTypeListCompanies
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
		return ($this->Exchange = XiFinancialsTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiFinancialsTypeExchangeTypes
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