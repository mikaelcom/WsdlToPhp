<?php
/**
 * Class file for XiSecurityTypeSymbol
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeSymbol
 * @date 08/07/2012
 */
class XiSecurityTypeSymbol extends XiSecurityTypeCommon
{
	/**
	 * The FromSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromSymbol;
	/**
	 * The FromType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSymbologyTypes
	 */
	public $FromType;
	/**
	 * The ToSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToSymbol;
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
	 * @param string FromSymbol
	 * @param XiSecurityTypeSymbologyTypes FromType
	 * @param string ToSymbol
	 * @param XiSecurityTypeSymbologyTypes ToType
	 * @return XiSecurityTypeSymbol
	 */
	public function __construct($_FromSymbol = null,$_FromType,$_ToSymbol = null,$_ToType)
	{
		XiSecurityWsdlClass::__construct(array('FromSymbol'=>$_FromSymbol,'FromType'=>$_FromType,'ToSymbol'=>$_ToSymbol,'ToType'=>$_ToType));
	}
	/**
	 * Set FromSymbol
	 * @param string FromSymbol
	 * @return string
	 */
	public function setFromSymbol($_FromSymbol)
	{
		return ($this->FromSymbol = $_FromSymbol);
	}
	/**
	 * Get FromSymbol
	 * @return string
	 */
	public function getFromSymbol()
	{
		return $this->FromSymbol;
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
	 * Set ToSymbol
	 * @param string ToSymbol
	 * @return string
	 */
	public function setToSymbol($_ToSymbol)
	{
		return ($this->ToSymbol = $_ToSymbol);
	}
	/**
	 * Get ToSymbol
	 * @return string
	 */
	public function getToSymbol()
	{
		return $this->ToSymbol;
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