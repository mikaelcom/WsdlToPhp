<?php
/**
 * Class file for XiFinancialsTypeFinancial
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeFinancial
 * @date 08/07/2012
 */
class XiFinancialsTypeFinancial extends XiFinancialsTypeCommon
{
	/**
	 * The StandardType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStandardItemTypes
	 */
	public $StandardType;
	/**
	 * The FinancialServicesType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesItemTypes
	 */
	public $FinancialServicesType;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * The ValueType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeValueTypes
	 */
	public $ValueType;
	/**
	 * The Unit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Unit;
	/**
	 * Constructor
	 * @param XiFinancialsTypeStandardItemTypes StandardType
	 * @param XiFinancialsTypeFinancialServicesItemTypes FinancialServicesType
	 * @param string Name
	 * @param string Value
	 * @param XiFinancialsTypeValueTypes ValueType
	 * @param string Unit
	 * @return XiFinancialsTypeFinancial
	 */
	public function __construct($_StandardType,$_FinancialServicesType,$_Name = null,$_Value = null,$_ValueType,$_Unit = null)
	{
		XiFinancialsWsdlClass::__construct(array('StandardType'=>$_StandardType,'FinancialServicesType'=>$_FinancialServicesType,'Name'=>$_Name,'Value'=>$_Value,'ValueType'=>$_ValueType,'Unit'=>$_Unit));
	}
	/**
	 * Set StandardType
	 * @param StandardItemTypes StandardType
	 * @return StandardItemTypes
	 */
	public function setStandardType($_StandardType)
	{
		return ($this->StandardType = XiFinancialsTypeStandardItemTypes::valueIsValid($_StandardType)?$_StandardType:null);
	}
	/**
	 * Get StandardType
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function getStandardType()
	{
		return $this->StandardType;
	}
	/**
	 * Set FinancialServicesType
	 * @param FinancialServicesItemTypes FinancialServicesType
	 * @return FinancialServicesItemTypes
	 */
	public function setFinancialServicesType($_FinancialServicesType)
	{
		return ($this->FinancialServicesType = XiFinancialsTypeFinancialServicesItemTypes::valueIsValid($_FinancialServicesType)?$_FinancialServicesType:null);
	}
	/**
	 * Get FinancialServicesType
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function getFinancialServicesType()
	{
		return $this->FinancialServicesType;
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
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set ValueType
	 * @param ValueTypes ValueType
	 * @return ValueTypes
	 */
	public function setValueType($_ValueType)
	{
		return ($this->ValueType = XiFinancialsTypeValueTypes::valueIsValid($_ValueType)?$_ValueType:null);
	}
	/**
	 * Get ValueType
	 * @return XiFinancialsTypeValueTypes
	 */
	public function getValueType()
	{
		return $this->ValueType;
	}
	/**
	 * Set Unit
	 * @param string Unit
	 * @return string
	 */
	public function setUnit($_Unit)
	{
		return ($this->Unit = $_Unit);
	}
	/**
	 * Get Unit
	 * @return string
	 */
	public function getUnit()
	{
		return $this->Unit;
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