<?php
/**
 * Class file for ConeSearchTypeINFO
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeINFO
 * @date 13/10/2012
 */
class ConeSearchTypeINFO extends ConeSearchWsdlClass
{
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
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
	 * @param ID ID
	 * @param token name
	 * @param string value
	 * @return ConeSearchTypeINFO
	 */
	public function __construct($_ID = null,$_name = null,$_value = null)
	{
		parent::__construct(array('ID'=>$_ID,'name'=>$_name,'value'=>$_value));
	}
	/**
	 * Set ID
	 * @param ID ID
	 * @return ID
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return ID
	 */
	public function getID()
	{
		return $this->ID;
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