<?php
/**
 * Class file for AmazonSimpleDBTypeUpdateCondition
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeUpdateCondition
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeUpdateCondition extends AmazonSimpleDBWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Value;
	/**
	 * The Exists
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- default : true
	 * @var boolean
	 */
	public $Exists;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Value
	 * @param boolean Exists
	 * @return AmazonSimpleDBTypeUpdateCondition
	 */
	public function __construct($_Name = null,$_Value = null,$_Exists = true)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value,'Exists'=>$_Exists));
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
	 * Set Exists
	 * @param boolean Exists
	 * @return boolean
	 */
	public function setExists($_Exists)
	{
		return ($this->Exists = $_Exists);
	}
	/**
	 * Get Exists
	 * @return boolean
	 */
	public function getExists()
	{
		return $this->Exists;
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