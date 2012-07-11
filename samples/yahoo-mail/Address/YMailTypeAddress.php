<?php
/**
 * Class file for YMailTypeAddress
 * @date 02/07/2012
 */
/**
 * Class YMailTypeAddress
 * @date 02/07/2012
 */
class YMailTypeAddress extends YMailWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $name;
	/**
	 * The email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $email;
	/**
	 * Constructor
	 * @param string name
	 * @param string email
	 * @return YMailTypeAddress
	 */
	public function __construct($_name = null,$_email = null)
	{
		parent::__construct(array('name'=>$_name,'email'=>$_email));
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
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
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