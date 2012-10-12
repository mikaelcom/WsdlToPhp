<?php
/**
 * Class file for ConeSearchTypeOPTION
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeOPTION
 * @date 13/10/2012
 */
class ConeSearchTypeOPTION extends ConeSearchWsdlClass
{
	/**
	 * The OPTION
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeOPTION
	 */
	public $OPTION;
	/**
	 * The name
	 * @var token
	 */
	public $name;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param ConeSearchTypeOPTION OPTION
	 * @param token name
	 * @param string value
	 * @return ConeSearchTypeOPTION
	 */
	public function __construct($_OPTION = null,$_name = null,$_value = null)
	{
		parent::__construct(array('OPTION'=>$_OPTION,'name'=>$_name,'value'=>$_value));
	}
	/**
	 * Set OPTION
	 * @param OPTION OPTION
	 * @return OPTION
	 */
	public function setOPTION($_OPTION)
	{
		return ($this->OPTION = $_OPTION);
	}
	/**
	 * Get OPTION
	 * @return ConeSearchTypeOPTION
	 */
	public function getOPTION()
	{
		return $this->OPTION;
	}
	/**
	 * Set name
	 * @param token name
	 * @return token
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return token
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