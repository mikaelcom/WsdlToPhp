<?php
/**
 * Class file for YMailTypeExternalAccountAlias
 * @date 02/07/2012
 */
/**
 * Class YMailTypeExternalAccountAlias
 * @date 02/07/2012
 */
class YMailTypeExternalAccountAlias extends YMailWsdlClass
{
	/**
	 * The accountName
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $accountName;
	/**
	 * The fromName
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $fromName;
	/**
	 * The address
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $address;
	/**
	 * The replyTo
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $replyTo;
	/**
	 * The server
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $server;
	/**
	 * The username
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $username;
	/**
	 * The colorIndicator
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $colorIndicator;
	/**
	 * The folder
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $folder;
	/**
	 * The port
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $port;
	/**
	 * The leaveMail
	 * Meta informations :
	 * 	- use : optional
	 * @var boolean
	 */
	public $leaveMail;
	/**
	 * The retrieveOnlyNew
	 * Meta informations :
	 * 	- use : optional
	 * @var boolean
	 */
	public $retrieveOnlyNew;
	/**
	 * The useFilters
	 * Meta informations :
	 * 	- use : optional
	 * @var boolean
	 */
	public $useFilters;
	/**
	 * The isDefault
	 * Meta informations :
	 * 	- use : optional
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * Constructor
	 * @param string accountName
	 * @param string fromName
	 * @param string address
	 * @param string replyTo
	 * @param string server
	 * @param string username
	 * @param string colorIndicator
	 * @param string folder
	 * @param string port
	 * @param boolean leaveMail
	 * @param boolean retrieveOnlyNew
	 * @param boolean useFilters
	 * @param boolean isDefault
	 * @return YMailTypeExternalAccountAlias
	 */
	public function __construct($_accountName = null,$_fromName = null,$_address = null,$_replyTo = null,$_server = null,$_username = null,$_colorIndicator = null,$_folder = null,$_port = null,$_leaveMail = null,$_retrieveOnlyNew = null,$_useFilters = null,$_isDefault = null)
	{
		parent::__construct(array('accountName'=>$_accountName,'fromName'=>$_fromName,'address'=>$_address,'replyTo'=>$_replyTo,'server'=>$_server,'username'=>$_username,'colorIndicator'=>$_colorIndicator,'folder'=>$_folder,'port'=>$_port,'leaveMail'=>$_leaveMail,'retrieveOnlyNew'=>$_retrieveOnlyNew,'useFilters'=>$_useFilters,'isDefault'=>$_isDefault));
	}
	/**
	 * Set accountName
	 * @param string accountName
	 * @return string
	 */
	public function setAccountName($_accountName)
	{
		return ($this->accountName = $_accountName);
	}
	/**
	 * Get accountName
	 * @return string
	 */
	public function getAccountName()
	{
		return $this->accountName;
	}
	/**
	 * Set fromName
	 * @param string fromName
	 * @return string
	 */
	public function setFromName($_fromName)
	{
		return ($this->fromName = $_fromName);
	}
	/**
	 * Get fromName
	 * @return string
	 */
	public function getFromName()
	{
		return $this->fromName;
	}
	/**
	 * Set address
	 * @param string address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set replyTo
	 * @param string replyTo
	 * @return string
	 */
	public function setReplyTo($_replyTo)
	{
		return ($this->replyTo = $_replyTo);
	}
	/**
	 * Get replyTo
	 * @return string
	 */
	public function getReplyTo()
	{
		return $this->replyTo;
	}
	/**
	 * Set server
	 * @param string server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
	}
	/**
	 * Get server
	 * @return string
	 */
	public function getServer()
	{
		return $this->server;
	}
	/**
	 * Set username
	 * @param string username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	/**
	 * Set colorIndicator
	 * @param string colorIndicator
	 * @return string
	 */
	public function setColorIndicator($_colorIndicator)
	{
		return ($this->colorIndicator = $_colorIndicator);
	}
	/**
	 * Get colorIndicator
	 * @return string
	 */
	public function getColorIndicator()
	{
		return $this->colorIndicator;
	}
	/**
	 * Set folder
	 * @param string folder
	 * @return string
	 */
	public function setFolder($_folder)
	{
		return ($this->folder = $_folder);
	}
	/**
	 * Get folder
	 * @return string
	 */
	public function getFolder()
	{
		return $this->folder;
	}
	/**
	 * Set port
	 * @param string port
	 * @return string
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get port
	 * @return string
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set leaveMail
	 * @param boolean leaveMail
	 * @return boolean
	 */
	public function setLeaveMail($_leaveMail)
	{
		return ($this->leaveMail = $_leaveMail);
	}
	/**
	 * Get leaveMail
	 * @return boolean
	 */
	public function getLeaveMail()
	{
		return $this->leaveMail;
	}
	/**
	 * Set retrieveOnlyNew
	 * @param boolean retrieveOnlyNew
	 * @return boolean
	 */
	public function setRetrieveOnlyNew($_retrieveOnlyNew)
	{
		return ($this->retrieveOnlyNew = $_retrieveOnlyNew);
	}
	/**
	 * Get retrieveOnlyNew
	 * @return boolean
	 */
	public function getRetrieveOnlyNew()
	{
		return $this->retrieveOnlyNew;
	}
	/**
	 * Set useFilters
	 * @param boolean useFilters
	 * @return boolean
	 */
	public function setUseFilters($_useFilters)
	{
		return ($this->useFilters = $_useFilters);
	}
	/**
	 * Get useFilters
	 * @return boolean
	 */
	public function getUseFilters()
	{
		return $this->useFilters;
	}
	/**
	 * Set isDefault
	 * @param boolean isDefault
	 * @return boolean
	 */
	public function setIsDefault($_isDefault)
	{
		return ($this->isDefault = $_isDefault);
	}
	/**
	 * Get isDefault
	 * @return boolean
	 */
	public function getIsDefault()
	{
		return $this->isDefault;
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