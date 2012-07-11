<?php
/**
 * Class file for YMailTypeInboxServices
 * @date 02/07/2012
 */
/**
 * Class YMailTypeInboxServices
 * @date 02/07/2012
 */
class YMailTypeInboxServices extends YMailWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param string name
	 * @param string value
	 * @return YMailTypeInboxServices
	 */
	public function __construct($_name,$_value)
	{
		parent::__construct(array('name'=>$_name,'value'=>$_value));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
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