<?php
/**
 * Class file for SPCopyTypeFieldInformation
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeFieldInformation
 * @date 07/07/2012
 */
class SPCopyTypeFieldInformation extends SPCopyWsdlClass
{
	/**
	 * The Type
	 * @var FieldType
	 */
	public $Type;
	/**
	 * The DisplayName
	 * @var string
	 */
	public $DisplayName;
	/**
	 * The InternalName
	 * @var string
	 */
	public $InternalName;
	/**
	 * The Id
	 * @var guid
	 */
	public $Id;
	/**
	 * The Value
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor
	 * @param FieldType Type
	 * @param string DisplayName
	 * @param string InternalName
	 * @param guid Id
	 * @param string Value
	 * @return SPCopyTypeFieldInformation
	 */
	public function __construct($_Type = null,$_DisplayName = null,$_InternalName = null,$_Id = null,$_Value = null)
	{
		parent::__construct(array('Type'=>$_Type,'DisplayName'=>$_DisplayName,'InternalName'=>$_InternalName,'Id'=>$_Id,'Value'=>$_Value));
	}
	/**
	 * Set Type
	 * @param FieldType Type
	 * @return FieldType
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return FieldType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set DisplayName
	 * @param string DisplayName
	 * @return string
	 */
	public function setDisplayName($_DisplayName)
	{
		return ($this->DisplayName = $_DisplayName);
	}
	/**
	 * Get DisplayName
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * Set InternalName
	 * @param string InternalName
	 * @return string
	 */
	public function setInternalName($_InternalName)
	{
		return ($this->InternalName = $_InternalName);
	}
	/**
	 * Get InternalName
	 * @return string
	 */
	public function getInternalName()
	{
		return $this->InternalName;
	}
	/**
	 * Set Id
	 * @param guid Id
	 * @return guid
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return guid
	 */
	public function getId()
	{
		return $this->Id;
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