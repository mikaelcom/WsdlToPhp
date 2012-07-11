<?php
/**
 * Class file for XiCurrenciesTypeCurrencyItem
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCurrencyItem
 * @date 08/07/2012
 */
class XiCurrenciesTypeCurrencyItem extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Plural
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Plural;
	/**
	 * The Supported
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Supported;
	/**
	 * The Active
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Active;
	/**
	 * The ActiveMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ActiveMessage;
	/**
	 * The Countries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCountry
	 */
	public $Countries;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string Plural
	 * @param boolean Supported
	 * @param boolean Active
	 * @param string ActiveMessage
	 * @param XiCurrenciesTypeArrayOfCountry Countries
	 * @return XiCurrenciesTypeCurrencyItem
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Plural = null,$_Supported,$_Active,$_ActiveMessage = null,$_Countries = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Plural'=>$_Plural,'Supported'=>$_Supported,'Active'=>$_Active,'ActiveMessage'=>$_ActiveMessage,'Countries'=>new XiCurrenciesTypeArrayOfCountry($_Countries)));
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
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Plural
	 * @param string Plural
	 * @return string
	 */
	public function setPlural($_Plural)
	{
		return ($this->Plural = $_Plural);
	}
	/**
	 * Get Plural
	 * @return string
	 */
	public function getPlural()
	{
		return $this->Plural;
	}
	/**
	 * Set Supported
	 * @param boolean Supported
	 * @return boolean
	 */
	public function setSupported($_Supported)
	{
		return ($this->Supported = $_Supported);
	}
	/**
	 * Get Supported
	 * @return boolean
	 */
	public function getSupported()
	{
		return $this->Supported;
	}
	/**
	 * Set Active
	 * @param boolean Active
	 * @return boolean
	 */
	public function setActive($_Active)
	{
		return ($this->Active = $_Active);
	}
	/**
	 * Get Active
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->Active;
	}
	/**
	 * Set ActiveMessage
	 * @param string ActiveMessage
	 * @return string
	 */
	public function setActiveMessage($_ActiveMessage)
	{
		return ($this->ActiveMessage = $_ActiveMessage);
	}
	/**
	 * Get ActiveMessage
	 * @return string
	 */
	public function getActiveMessage()
	{
		return $this->ActiveMessage;
	}
	/**
	 * Set Countries
	 * @param ArrayOfCountry Countries
	 * @return ArrayOfCountry
	 */
	public function setCountries($_Countries)
	{
		return ($this->Countries = $_Countries);
	}
	/**
	 * Get Countries
	 * @return XiCurrenciesTypeArrayOfCountry
	 */
	public function getCountries()
	{
		return $this->Countries;
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