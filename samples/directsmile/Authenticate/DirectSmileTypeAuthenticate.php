<?php
/**
 * Class file for DirectSmileTypeAuthenticate
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeAuthenticate
 * @date 02/08/2012
 */
class DirectSmileTypeAuthenticate extends DirectSmileWsdlClass
{
	/**
	 * The UserName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UserName;
	/**
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Password;
	/**
	 * The Language
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Language;
	/**
	 * Constructor
	 * @param string UserName
	 * @param string Password
	 * @param string Language
	 * @return DirectSmileTypeAuthenticate
	 */
	public function __construct($_UserName = null,$_Password = null,$_Language = null)
	{
		parent::__construct(array('UserName'=>$_UserName,'Password'=>$_Password,'Language'=>$_Language));
	}
	/**
	 * Set UserName
	 * @param string UserName
	 * @return string
	 */
	public function setUserName($_UserName)
	{
		return ($this->UserName = $_UserName);
	}
	/**
	 * Get UserName
	 * @return string
	 */
	public function getUserName()
	{
		return $this->UserName;
	}
	/**
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}
	/**
	 * Set Language
	 * @param string Language
	 * @return string
	 */
	public function setLanguage($_Language)
	{
		return ($this->Language = $_Language);
	}
	/**
	 * Get Language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->Language;
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