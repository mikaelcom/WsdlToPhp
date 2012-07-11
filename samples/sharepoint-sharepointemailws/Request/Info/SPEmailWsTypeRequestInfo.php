<?php
/**
 * Class file for SPEmailWsTypeRequestInfo
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeRequestInfo
 * @date 06/07/2012
 */
class SPEmailWsTypeRequestInfo extends SPEmailWsWsdlClass
{
	/**
	 * The RequestorEmail
	 * @var string
	 */
	public $RequestorEmail;
	/**
	 * The Justification
	 * @var string
	 */
	public $Justification;
	/**
	 * The RequestId
	 * @var guid
	 */
	public $RequestId;
	/**
	 * Constructor
	 * @param string RequestorEmail
	 * @param string Justification
	 * @param guid RequestId
	 * @return SPEmailWsTypeRequestInfo
	 */
	public function __construct($_RequestorEmail = null,$_Justification = null,$_RequestId = null)
	{
		parent::__construct(array('RequestorEmail'=>$_RequestorEmail,'Justification'=>$_Justification,'RequestId'=>$_RequestId));
	}
	/**
	 * Set RequestorEmail
	 * @param string RequestorEmail
	 * @return string
	 */
	public function setRequestorEmail($_RequestorEmail)
	{
		return ($this->RequestorEmail = $_RequestorEmail);
	}
	/**
	 * Get RequestorEmail
	 * @return string
	 */
	public function getRequestorEmail()
	{
		return $this->RequestorEmail;
	}
	/**
	 * Set Justification
	 * @param string Justification
	 * @return string
	 */
	public function setJustification($_Justification)
	{
		return ($this->Justification = $_Justification);
	}
	/**
	 * Get Justification
	 * @return string
	 */
	public function getJustification()
	{
		return $this->Justification;
	}
	/**
	 * Set RequestId
	 * @param guid RequestId
	 * @return guid
	 */
	public function setRequestId($_RequestId)
	{
		return ($this->RequestId = $_RequestId);
	}
	/**
	 * Get RequestId
	 * @return guid
	 */
	public function getRequestId()
	{
		return $this->RequestId;
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