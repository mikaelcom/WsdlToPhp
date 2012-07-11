<?php
/**
 * Class file for YMailTypeComposeAddress
 * @date 02/07/2012
 */
/**
 * Class YMailTypeComposeAddress
 * @date 02/07/2012
 */
class YMailTypeComposeAddress extends YMailWsdlClass
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
	 * @var string
	 */
	public $email;
	/**
	 * The nickname
	 * @var string
	 */
	public $nickname;
	/**
	 * Constructor
	 * @param string name
	 * @param string email
	 * @param string nickname
	 * @return YMailTypeComposeAddress
	 */
	public function __construct($_name = null,$_email = null,$_nickname = null)
	{
		parent::__construct(array('name'=>$_name,'email'=>$_email,'nickname'=>$_nickname));
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
	 * Set nickname
	 * @param string nickname
	 * @return string
	 */
	public function setNickname($_nickname)
	{
		return ($this->nickname = $_nickname);
	}
	/**
	 * Get nickname
	 * @return string
	 */
	public function getNickname()
	{
		return $this->nickname;
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