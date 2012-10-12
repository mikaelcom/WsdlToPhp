<?php
/**
 * Class file for ScienceGovSearchTypeResultField
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeResultField
 * @date 13/10/2012
 */
class ScienceGovSearchTypeResultField extends ScienceGovSearchWsdlClass
{
	/**
	 * The attributes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeAttribute
	 */
	public $attributes;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeAttribute attributes
	 * @param string name
	 * @param string value
	 * @return ScienceGovSearchTypeResultField
	 */
	public function __construct($_attributes = null,$_name = null,$_value = null)
	{
		parent::__construct(array('attributes'=>$_attributes,'name'=>$_name,'value'=>$_value));
	}
	/**
	 * Set attributes
	 * @param Attribute attributes
	 * @return Attribute
	 */
	public function setAttributes($_attributes)
	{
		return ($this->attributes = $_attributes);
	}
	/**
	 * Get attributes
	 * @return ScienceGovSearchTypeAttribute
	 */
	public function getAttributes()
	{
		return $this->attributes;
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