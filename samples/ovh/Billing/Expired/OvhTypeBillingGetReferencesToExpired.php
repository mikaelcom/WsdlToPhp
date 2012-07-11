<?php
/**
 * Class file for OvhTypeBillingGetReferencesToExpired
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingGetReferencesToExpired
 * @date 02/07/2012
 */
class OvhTypeBillingGetReferencesToExpired extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The delay
	 * @var int
	 */
	public $delay;
	/**
	 * Constructor
	 * @param string session
	 * @param int delay
	 * @return OvhTypeBillingGetReferencesToExpired
	 */
	public function __construct($_session = null,$_delay = null)
	{
		parent::__construct(array('session'=>$_session,'delay'=>$_delay));
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
	 * Set delay
	 * @param int delay
	 * @return int
	 */
	public function setDelay($_delay)
	{
		return ($this->delay = $_delay);
	}
	/**
	 * Get delay
	 * @return int
	 */
	public function getDelay()
	{
		return $this->delay;
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