<?php
/**
 * Class file for XiGlobalmasterTypeCustomAttribute
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeCustomAttribute
 * @date 08/07/2012
 */
class XiGlobalmasterTypeCustomAttribute extends XiGlobalmasterWsdlClass
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
	 * The DataType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DataType;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor
	 * @param string Name
	 * @param string DataType
	 * @param string Value
	 * @return XiGlobalmasterTypeCustomAttribute
	 */
	public function __construct($_Name = null,$_DataType = null,$_Value = null)
	{
		parent::__construct(array('Name'=>$_Name,'DataType'=>$_DataType,'Value'=>$_Value));
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
	 * Set DataType
	 * @param string DataType
	 * @return string
	 */
	public function setDataType($_DataType)
	{
		return ($this->DataType = $_DataType);
	}
	/**
	 * Get DataType
	 * @return string
	 */
	public function getDataType()
	{
		return $this->DataType;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>