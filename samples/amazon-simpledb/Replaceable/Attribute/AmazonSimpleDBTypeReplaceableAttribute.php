<?php
/**
 * Class file for AmazonSimpleDBTypeReplaceableAttribute
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeReplaceableAttribute
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeReplaceableAttribute extends AmazonSimpleDBWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * @var string
	 */
	public $Value;
	/**
	 * The Replace
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- default : false
	 * @var boolean
	 */
	public $Replace;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Value
	 * @param boolean Replace
	 * @return AmazonSimpleDBTypeReplaceableAttribute
	 */
	public function __construct($_Name = null,$_Value = null,$_Replace = false)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value,'Replace'=>$_Replace));
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
	 * Set Replace
	 * @param boolean Replace
	 * @return boolean
	 */
	public function setReplace($_Replace)
	{
		return ($this->Replace = $_Replace);
	}
	/**
	 * Get Replace
	 * @return boolean
	 */
	public function getReplace()
	{
		return $this->Replace;
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