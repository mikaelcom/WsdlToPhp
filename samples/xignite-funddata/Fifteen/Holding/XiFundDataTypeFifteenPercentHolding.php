<?php
/**
 * Class file for XiFundDataTypeFifteenPercentHolding
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFifteenPercentHolding
 * @date 08/07/2012
 */
class XiFundDataTypeFifteenPercentHolding extends XiFundDataWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The IRSNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IRSNumber;
	/**
	 * The SecurityType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurityTypes
	 */
	public $SecurityType;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * Constructor
	 * @param string Name
	 * @param string IRSNumber
	 * @param XiFundDataTypeSecurityTypes SecurityType
	 * @param double Value
	 * @return XiFundDataTypeFifteenPercentHolding
	 */
	public function __construct($_Name = null,$_IRSNumber = null,$_SecurityType,$_Value)
	{
		parent::__construct(array('Name'=>$_Name,'IRSNumber'=>$_IRSNumber,'SecurityType'=>$_SecurityType,'Value'=>$_Value));
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
	 * Set IRSNumber
	 * @param string IRSNumber
	 * @return string
	 */
	public function setIRSNumber($_IRSNumber)
	{
		return ($this->IRSNumber = $_IRSNumber);
	}
	/**
	 * Get IRSNumber
	 * @return string
	 */
	public function getIRSNumber()
	{
		return $this->IRSNumber;
	}
	/**
	 * Set SecurityType
	 * @param SecurityTypes SecurityType
	 * @return SecurityTypes
	 */
	public function setSecurityType($_SecurityType)
	{
		return ($this->SecurityType = XiFundDataTypeSecurityTypes::valueIsValid($_SecurityType)?$_SecurityType:null);
	}
	/**
	 * Get SecurityType
	 * @return XiFundDataTypeSecurityTypes
	 */
	public function getSecurityType()
	{
		return $this->SecurityType;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
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