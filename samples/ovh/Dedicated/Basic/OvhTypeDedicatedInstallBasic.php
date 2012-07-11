<?php
/**
 * Class file for OvhTypeDedicatedInstallBasic
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallBasic
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallBasic extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The bitFormat
	 * @var string
	 */
	public $bitFormat;
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * The sql
	 * @var string
	 */
	public $sql;
	/**
	 * The customerScriptLink
	 * @var string
	 */
	public $customerScriptLink;
	/**
	 * The customerScriptReturn
	 * @var string
	 */
	public $customerScriptReturn;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string status
	 * @param string language
	 * @param string bitFormat
	 * @param string os
	 * @param string sql
	 * @param string customerScriptLink
	 * @param string customerScriptReturn
	 * @return OvhTypeDedicatedInstallBasic
	 */
	public function __construct($_session = null,$_hostname = null,$_status = null,$_language = null,$_bitFormat = null,$_os = null,$_sql = null,$_customerScriptLink = null,$_customerScriptReturn = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'status'=>$_status,'language'=>$_language,'bitFormat'=>$_bitFormat,'os'=>$_os,'sql'=>$_sql,'customerScriptLink'=>$_customerScriptLink,'customerScriptReturn'=>$_customerScriptReturn));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * Set bitFormat
	 * @param string bitFormat
	 * @return string
	 */
	public function setBitFormat($_bitFormat)
	{
		return ($this->bitFormat = $_bitFormat);
	}
	/**
	 * Get bitFormat
	 * @return string
	 */
	public function getBitFormat()
	{
		return $this->bitFormat;
	}
	/**
	 * Set os
	 * @param string os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get os
	 * @return string
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set sql
	 * @param string sql
	 * @return string
	 */
	public function setSql($_sql)
	{
		return ($this->sql = $_sql);
	}
	/**
	 * Get sql
	 * @return string
	 */
	public function getSql()
	{
		return $this->sql;
	}
	/**
	 * Set customerScriptLink
	 * @param string customerScriptLink
	 * @return string
	 */
	public function setCustomerScriptLink($_customerScriptLink)
	{
		return ($this->customerScriptLink = $_customerScriptLink);
	}
	/**
	 * Get customerScriptLink
	 * @return string
	 */
	public function getCustomerScriptLink()
	{
		return $this->customerScriptLink;
	}
	/**
	 * Set customerScriptReturn
	 * @param string customerScriptReturn
	 * @return string
	 */
	public function setCustomerScriptReturn($_customerScriptReturn)
	{
		return ($this->customerScriptReturn = $_customerScriptReturn);
	}
	/**
	 * Get customerScriptReturn
	 * @return string
	 */
	public function getCustomerScriptReturn()
	{
		return $this->customerScriptReturn;
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