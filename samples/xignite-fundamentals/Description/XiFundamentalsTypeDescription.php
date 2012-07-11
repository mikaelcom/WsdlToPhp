<?php
/**
 * Class file for XiFundamentalsTypeDescription
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeDescription
 * @date 08/07/2012
 */
class XiFundamentalsTypeDescription extends XiFundamentalsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeSecurity
	 */
	public $Security;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalTypes
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
	 * @var XiFundamentalsTypeValueTypes
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
	 * Constructor
	 * @param XiFundamentalsTypeSecurity Security
	 * @param XiFundamentalsTypeFundamentalTypes Type
	 * @param string Name
	 * @param XiFundamentalsTypeValueTypes ValueType
	 * @param string Unit
	 * @param string Source
	 * @param string Reference
	 * @param string Description
	 * @return XiFundamentalsTypeDescription
	 */
	public function __construct($_Security = null,$_Type,$_Name = null,$_ValueType,$_Unit = null,$_Source = null,$_Reference = null,$_Description = null)
	{
		XiFundamentalsWsdlClass::__construct(array('Security'=>$_Security,'Type'=>$_Type,'Name'=>$_Name,'ValueType'=>$_ValueType,'Unit'=>$_Unit,'Source'=>$_Source,'Reference'=>$_Reference,'Description'=>$_Description));
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
	 * @return XiFundamentalsTypeSecurity
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
		return ($this->Type = XiFundamentalsTypeFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundamentalsTypeFundamentalTypes
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
		return ($this->ValueType = XiFundamentalsTypeValueTypes::valueIsValid($_ValueType)?$_ValueType:null);
	}
	/**
	 * Get ValueType
	 * @return XiFundamentalsTypeValueTypes
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>