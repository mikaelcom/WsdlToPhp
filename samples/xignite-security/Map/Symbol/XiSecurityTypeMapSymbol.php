<?php
/**
 * Class file for XiSecurityTypeMapSymbol
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeMapSymbol
 * @date 08/07/2012
 */
class XiSecurityTypeMapSymbol extends XiSecurityWsdlClass
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
	 * The FromType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSymbologyTypes
	 */
	public $FromType;
	/**
	 * The ToType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSymbologyTypes
	 */
	public $ToType;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiSecurityTypeSymbologyTypes FromType
	 * @param XiSecurityTypeSymbologyTypes ToType
	 * @return XiSecurityTypeMapSymbol
	 */
	public function __construct($_Symbol = null,$_FromType,$_ToType)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'FromType'=>$_FromType,'ToType'=>$_ToType));
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
	 * Set FromType
	 * @param SymbologyTypes FromType
	 * @return SymbologyTypes
	 */
	public function setFromType($_FromType)
	{
		return ($this->FromType = XiSecurityTypeSymbologyTypes::valueIsValid($_FromType)?$_FromType:null);
	}
	/**
	 * Get FromType
	 * @return XiSecurityTypeSymbologyTypes
	 */
	public function getFromType()
	{
		return $this->FromType;
	}
	/**
	 * Set ToType
	 * @param SymbologyTypes ToType
	 * @return SymbologyTypes
	 */
	public function setToType($_ToType)
	{
		return ($this->ToType = XiSecurityTypeSymbologyTypes::valueIsValid($_ToType)?$_ToType:null);
	}
	/**
	 * Get ToType
	 * @return XiSecurityTypeSymbologyTypes
	 */
	public function getToType()
	{
		return $this->ToType;
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