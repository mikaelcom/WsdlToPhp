<?php
/**
 * Class file for EccEmailPop3TypeCheckPOP3
 * @date 03/07/2012
 */
/**
 * Class EccEmailPop3TypeCheckPOP3
 * @date 03/07/2012
 */
class EccEmailPop3TypeCheckPOP3 extends EccEmailPop3WsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The ServerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ServerName;
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
	 * The Retr
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Retr;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string ServerName
	 * @param string UserName
	 * @param string Password
	 * @param string Retr
	 * @return EccEmailPop3TypeCheckPOP3
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_ServerName = null,$_UserName = null,$_Password = null,$_Retr = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'ServerName'=>$_ServerName,'UserName'=>$_UserName,'Password'=>$_Password,'Retr'=>$_Retr));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set ServerName
	 * @param string ServerName
	 * @return string
	 */
	public function setServerName($_ServerName)
	{
		return ($this->ServerName = $_ServerName);
	}
	/**
	 * Get ServerName
	 * @return string
	 */
	public function getServerName()
	{
		return $this->ServerName;
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
	 * Set Retr
	 * @param string Retr
	 * @return string
	 */
	public function setRetr($_Retr)
	{
		return ($this->Retr = $_Retr);
	}
	/**
	 * Get Retr
	 * @return string
	 */
	public function getRetr()
	{
		return $this->Retr;
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