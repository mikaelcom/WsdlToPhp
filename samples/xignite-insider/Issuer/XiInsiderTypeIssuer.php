<?php
/**
 * Class file for XiInsiderTypeIssuer
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeIssuer
 * @date 08/07/2012
 */
class XiInsiderTypeIssuer extends XiInsiderWsdlClass
{
	/**
	 * The issuerCik
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $issuerCik;
	/**
	 * The issuerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $issuerName;
	/**
	 * The issuerTradingSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $issuerTradingSymbol;
	/**
	 * Constructor
	 * @param string issuerCik
	 * @param string issuerName
	 * @param string issuerTradingSymbol
	 * @return XiInsiderTypeIssuer
	 */
	public function __construct($_issuerCik = null,$_issuerName = null,$_issuerTradingSymbol = null)
	{
		parent::__construct(array('issuerCik'=>$_issuerCik,'issuerName'=>$_issuerName,'issuerTradingSymbol'=>$_issuerTradingSymbol));
	}
	/**
	 * Set issuerCik
	 * @param string issuerCik
	 * @return string
	 */
	public function setIssuerCik($_issuerCik)
	{
		return ($this->issuerCik = $_issuerCik);
	}
	/**
	 * Get issuerCik
	 * @return string
	 */
	public function getIssuerCik()
	{
		return $this->issuerCik;
	}
	/**
	 * Set issuerName
	 * @param string issuerName
	 * @return string
	 */
	public function setIssuerName($_issuerName)
	{
		return ($this->issuerName = $_issuerName);
	}
	/**
	 * Get issuerName
	 * @return string
	 */
	public function getIssuerName()
	{
		return $this->issuerName;
	}
	/**
	 * Set issuerTradingSymbol
	 * @param string issuerTradingSymbol
	 * @return string
	 */
	public function setIssuerTradingSymbol($_issuerTradingSymbol)
	{
		return ($this->issuerTradingSymbol = $_issuerTradingSymbol);
	}
	/**
	 * Get issuerTradingSymbol
	 * @return string
	 */
	public function getIssuerTradingSymbol()
	{
		return $this->issuerTradingSymbol;
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