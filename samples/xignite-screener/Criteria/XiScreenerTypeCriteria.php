<?php
/**
 * Class file for XiScreenerTypeCriteria
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeCriteria
 * @date 08/07/2012
 */
class XiScreenerTypeCriteria extends XiScreenerWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $Type;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Unit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Unit;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The ValueType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeValueTypes
	 */
	public $ValueType;
	/**
	 * The Rounding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Rounding;
	/**
	 * The ValidValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeArrayOfValidValue
	 */
	public $ValidValues;
	/**
	 * Constructor
	 * @param XiScreenerTypeFundamentalTypes Type
	 * @param string Name
	 * @param string Unit
	 * @param string Description
	 * @param XiScreenerTypeValueTypes ValueType
	 * @param int Rounding
	 * @param XiScreenerTypeArrayOfValidValue ValidValues
	 * @return XiScreenerTypeCriteria
	 */
	public function __construct($_Type,$_Name = null,$_Unit = null,$_Description = null,$_ValueType,$_Rounding,$_ValidValues = null)
	{
		parent::__construct(array('Type'=>$_Type,'Name'=>$_Name,'Unit'=>$_Unit,'Description'=>$_Description,'ValueType'=>$_ValueType,'Rounding'=>$_Rounding,'ValidValues'=>new XiScreenerTypeArrayOfValidValue($_ValidValues)));
	}
	/**
	 * Set Type
	 * @param FundamentalTypes Type
	 * @return FundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiScreenerTypeFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set ValueType
	 * @param ValueTypes ValueType
	 * @return ValueTypes
	 */
	public function setValueType($_ValueType)
	{
		return ($this->ValueType = XiScreenerTypeValueTypes::valueIsValid($_ValueType)?$_ValueType:null);
	}
	/**
	 * Get ValueType
	 * @return XiScreenerTypeValueTypes
	 */
	public function getValueType()
	{
		return $this->ValueType;
	}
	/**
	 * Set Rounding
	 * @param int Rounding
	 * @return int
	 */
	public function setRounding($_Rounding)
	{
		return ($this->Rounding = $_Rounding);
	}
	/**
	 * Get Rounding
	 * @return int
	 */
	public function getRounding()
	{
		return $this->Rounding;
	}
	/**
	 * Set ValidValues
	 * @param ArrayOfValidValue ValidValues
	 * @return ArrayOfValidValue
	 */
	public function setValidValues($_ValidValues)
	{
		return ($this->ValidValues = $_ValidValues);
	}
	/**
	 * Get ValidValues
	 * @return XiScreenerTypeArrayOfValidValue
	 */
	public function getValidValues()
	{
		return $this->ValidValues;
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