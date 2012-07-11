<?php
/**
 * Class file for OvhTypeTelephonySmsUserHistoryCsv
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserHistoryCsv
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserHistoryCsv extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The smsId
	 * @var int
	 */
	public $smsId;
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * The pagingStart
	 * @var int
	 */
	public $pagingStart;
	/**
	 * The pagingLimit
	 * @var int
	 */
	public $pagingLimit;
	/**
	 * The sortField
	 * @var string
	 */
	public $sortField;
	/**
	 * The sortOrder
	 * @var string
	 */
	public $sortOrder;
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * Constructor
	 * @param string login
	 * @param string password
	 * @param string smsAccount
	 * @param int smsId
	 * @param string user
	 * @param int pagingStart
	 * @param int pagingLimit
	 * @param string sortField
	 * @param string sortOrder
	 * @param string tag
	 * @return OvhTypeTelephonySmsUserHistoryCsv
	 */
	public function __construct($_login = null,$_password = null,$_smsAccount = null,$_smsId = null,$_user = null,$_pagingStart = null,$_pagingLimit = null,$_sortField = null,$_sortOrder = null,$_tag = null)
	{
		parent::__construct(array('login'=>$_login,'password'=>$_password,'smsAccount'=>$_smsAccount,'smsId'=>$_smsId,'user'=>$_user,'pagingStart'=>$_pagingStart,'pagingLimit'=>$_pagingLimit,'sortField'=>$_sortField,'sortOrder'=>$_sortOrder,'tag'=>$_tag));
	}
	/**
	 * Set login
	 * @param string login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get login
	 * @return string
	 */
	public function getLogin()
	{
		return $this->login;
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
	 * Set smsAccount
	 * @param string smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get smsAccount
	 * @return string
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsId
	 * @param int smsId
	 * @return int
	 */
	public function setSmsId($_smsId)
	{
		return ($this->smsId = $_smsId);
	}
	/**
	 * Get smsId
	 * @return int
	 */
	public function getSmsId()
	{
		return $this->smsId;
	}
	/**
	 * Set user
	 * @param string user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get user
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set pagingStart
	 * @param int pagingStart
	 * @return int
	 */
	public function setPagingStart($_pagingStart)
	{
		return ($this->pagingStart = $_pagingStart);
	}
	/**
	 * Get pagingStart
	 * @return int
	 */
	public function getPagingStart()
	{
		return $this->pagingStart;
	}
	/**
	 * Set pagingLimit
	 * @param int pagingLimit
	 * @return int
	 */
	public function setPagingLimit($_pagingLimit)
	{
		return ($this->pagingLimit = $_pagingLimit);
	}
	/**
	 * Get pagingLimit
	 * @return int
	 */
	public function getPagingLimit()
	{
		return $this->pagingLimit;
	}
	/**
	 * Set sortField
	 * @param string sortField
	 * @return string
	 */
	public function setSortField($_sortField)
	{
		return ($this->sortField = $_sortField);
	}
	/**
	 * Get sortField
	 * @return string
	 */
	public function getSortField()
	{
		return $this->sortField;
	}
	/**
	 * Set sortOrder
	 * @param string sortOrder
	 * @return string
	 */
	public function setSortOrder($_sortOrder)
	{
		return ($this->sortOrder = $_sortOrder);
	}
	/**
	 * Get sortOrder
	 * @return string
	 */
	public function getSortOrder()
	{
		return $this->sortOrder;
	}
	/**
	 * Set tag
	 * @param string tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Get tag
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
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