<?php
/**
 * Class file for SOCurrencyExchangeTypeCurrencyNameResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeCurrencyNameResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeCurrencyNameResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The CurrencySymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CurrencySymbol;
	/**
	 * The CurrencyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CurrencyName;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string CurrencySymbol
	 * @param string CurrencyName
	 * @param string Error
	 * @return SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public function __construct($_CurrencySymbol = null,$_CurrencyName = null,$_Error = null)
	{
		parent::__construct(array('CurrencySymbol'=>$_CurrencySymbol,'CurrencyName'=>$_CurrencyName,'Error'=>$_Error));
	}
	/**
	 * Set CurrencySymbol
	 * @param string CurrencySymbol
	 * @return string
	 */
	public function setCurrencySymbol($_CurrencySymbol)
	{
		return ($this->CurrencySymbol = $_CurrencySymbol);
	}
	/**
	 * Get CurrencySymbol
	 * @return string
	 */
	public function getCurrencySymbol()
	{
		return $this->CurrencySymbol;
	}
	/**
	 * Set CurrencyName
	 * @param string CurrencyName
	 * @return string
	 */
	public function setCurrencyName($_CurrencyName)
	{
		return ($this->CurrencyName = $_CurrencyName);
	}
	/**
	 * Get CurrencyName
	 * @return string
	 */
	public function getCurrencyName()
	{
		return $this->CurrencyName;
	}
	/**
	 * Set Error
	 * @param string Error
	 * @return string
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return string
	 */
	public function getError()
	{
		return $this->Error;
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