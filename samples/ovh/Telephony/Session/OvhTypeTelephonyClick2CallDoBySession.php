<?php
/**
 * Class file for OvhTypeTelephonyClick2CallDoBySession
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyClick2CallDoBySession
 * @date 02/07/2012
 */
class OvhTypeTelephonyClick2CallDoBySession extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The calling
	 * @var string
	 */
	public $calling;
	/**
	 * The called
	 * @var string
	 */
	public $called;
	/**
	 * The billingNumber
	 * @var string
	 */
	public $billingNumber;
	/**
	 * Constructor
	 * @param string session
	 * @param string calling
	 * @param string called
	 * @param string billingNumber
	 * @return OvhTypeTelephonyClick2CallDoBySession
	 */
	public function __construct($_session = null,$_calling = null,$_called = null,$_billingNumber = null)
	{
		parent::__construct(array('session'=>$_session,'calling'=>$_calling,'called'=>$_called,'billingNumber'=>$_billingNumber));
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
	 * Set calling
	 * @param string calling
	 * @return string
	 */
	public function setCalling($_calling)
	{
		return ($this->calling = $_calling);
	}
	/**
	 * Get calling
	 * @return string
	 */
	public function getCalling()
	{
		return $this->calling;
	}
	/**
	 * Set called
	 * @param string called
	 * @return string
	 */
	public function setCalled($_called)
	{
		return ($this->called = $_called);
	}
	/**
	 * Get called
	 * @return string
	 */
	public function getCalled()
	{
		return $this->called;
	}
	/**
	 * Set billingNumber
	 * @param string billingNumber
	 * @return string
	 */
	public function setBillingNumber($_billingNumber)
	{
		return ($this->billingNumber = $_billingNumber);
	}
	/**
	 * Get billingNumber
	 * @return string
	 */
	public function getBillingNumber()
	{
		return $this->billingNumber;
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