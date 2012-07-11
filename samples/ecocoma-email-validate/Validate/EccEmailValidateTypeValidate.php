<?php
/**
 * Class file for EccEmailValidateTypeValidate
 * @date 03/07/2012
 */
/**
 * Class EccEmailValidateTypeValidate
 * @date 03/07/2012
 */
class EccEmailValidateTypeValidate extends EccEmailValidateWsdlClass
{
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
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
	 * @param string Email
	 * @param string Value
	 * @return EccEmailValidateTypeValidate
	 */
	public function __construct($_Email = null,$_Value = null)
	{
		parent::__construct(array('Email'=>$_Email,'Value'=>$_Value));
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
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