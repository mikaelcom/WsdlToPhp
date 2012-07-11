<?php
/**
 * Class file for OvhTypeDedicatedFailoverStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverStruct extends OvhWsdlClass
{
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The ssl
	 * @var boolean
	 */
	public $ssl;
	/**
	 * Constructor
	 * @param string ip
	 * @param string routedTo
	 * @param string comment
	 * @param boolean ssl
	 * @return OvhTypeDedicatedFailoverStruct
	 */
	public function __construct($_ip = null,$_routedTo = null,$_comment = null,$_ssl = null)
	{
		parent::__construct(array('ip'=>$_ip,'routedTo'=>$_routedTo,'comment'=>$_comment,'ssl'=>$_ssl));
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set routedTo
	 * @param string routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
	}
	/**
	 * Get routedTo
	 * @return string
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set ssl
	 * @param boolean ssl
	 * @return boolean
	 */
	public function setSsl($_ssl)
	{
		return ($this->ssl = $_ssl);
	}
	/**
	 * Get ssl
	 * @return boolean
	 */
	public function getSsl()
	{
		return $this->ssl;
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