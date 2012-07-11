<?php
/**
 * Class file for SPUserGroupTypeGetUserLoginFromEmail
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserLoginFromEmail
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserLoginFromEmail extends SPUserGroupWsdlClass
{
	/**
	 * The emailXml
	 * @var SPUserGroupTypeEmailXml
	 */
	public $emailXml;
	/**
	 * Constructor
	 * @param SPUserGroupTypeEmailXml emailXml
	 * @return SPUserGroupTypeGetUserLoginFromEmail
	 */
	public function __construct($_emailXml = null)
	{
		parent::__construct(array('emailXml'=>$_emailXml));
	}
	/**
	 * Set emailXml
	 * @param emailXml emailXml
	 * @return emailXml
	 */
	public function setEmailXml($_emailXml)
	{
		return ($this->emailXml = $_emailXml);
	}
	/**
	 * Get emailXml
	 * @return SPUserGroupTypeemailXml
	 */
	public function getEmailXml()
	{
		return $this->emailXml;
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