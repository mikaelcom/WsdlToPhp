<?php
/**
 * Class file for OvhTypeLogin
 * @date 02/07/2012
 */
/**
 * Class OvhTypeLogin
 * @date 02/07/2012
 */
class OvhTypeLogin extends OvhWsdlClass
{
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The multisession
	 * @var boolean
	 */
	public $multisession;
	/**
	 * Constructor
	 * @param string nic
	 * @param string password
	 * @param string language
	 * @param boolean multisession
	 * @return OvhTypeLogin
	 */
	public function __construct($_nic = null,$_password = null,$_language = null,$_multisession = null)
	{
		parent::__construct(array('nic'=>$_nic,'password'=>$_password,'language'=>$_language,'multisession'=>$_multisession));
	}
	/**
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set multisession
	 * @param boolean multisession
	 * @return boolean
	 */
	public function setMultisession($_multisession)
	{
		return ($this->multisession = $_multisession);
	}
	/**
	 * Get multisession
	 * @return boolean
	 */
	public function getMultisession()
	{
		return $this->multisession;
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