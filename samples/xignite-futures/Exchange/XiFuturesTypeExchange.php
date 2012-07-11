<?php
/**
 * Class file for XiFuturesTypeExchange
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeExchange
 * @date 08/07/2012
 */
class XiFuturesTypeExchange extends XiFuturesTypeCommon
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
	 * The Supported
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Supported;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param boolean Supported
	 * @return XiFuturesTypeExchange
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Supported)
	{
		XiFuturesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Supported'=>$_Supported));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>