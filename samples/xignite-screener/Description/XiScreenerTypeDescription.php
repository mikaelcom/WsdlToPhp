<?php
/**
 * Class file for XiScreenerTypeDescription
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeDescription
 * @date 08/07/2012
 */
class XiScreenerTypeDescription extends XiScreenerTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSecurity
	 */
	public $Security;
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
	 * The ValueType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeValueTypes
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
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The Reference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Reference;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Screenable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Screenable;
	/**
	 * Constructor
	 * @param XiScreenerTypeSecurity Security
	 * @param XiScreenerTypeFundamentalTypes Type
	 * @param string Name
	 * @param XiScreenerTypeValueTypes ValueType
	 * @param string Unit
	 * @param string Source
	 * @param string Reference
	 * @param string Description
	 * @param boolean Screenable
	 * @return XiScreenerTypeDescription
	 */
	public function __construct($_Security = null,$_Type,$_Name = null,$_ValueType,$_Unit = null,$_Source = null,$_Reference = null,$_Description = null,$_Screenable)
	{
		XiScreenerWsdlClass::__construct(array('Security'=>$_Security,'Type'=>$_Type,'Name'=>$_Name,'ValueType'=>$_ValueType,'Unit'=>$_Unit,'Source'=>$_Source,'Reference'=>$_Reference,'Description'=>$_Description,'Screenable'=>$_Screenable));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiScreenerTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set Reference
	 * @param string Reference
	 * @return string
	 */
	public function setReference($_Reference)
	{
		return ($this->Reference = $_Reference);
	}
	/**
	 * Get Reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->Reference;
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
	 * Set Screenable
	 * @param boolean Screenable
	 * @return boolean
	 */
	public function setScreenable($_Screenable)
	{
		return ($this->Screenable = $_Screenable);
	}
	/**
	 * Get Screenable
	 * @return boolean
	 */
	public function getScreenable()
	{
		return $this->Screenable;
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