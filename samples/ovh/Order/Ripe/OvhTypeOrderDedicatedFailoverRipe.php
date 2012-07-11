<?php
/**
 * Class file for OvhTypeOrderDedicatedFailoverRipe
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderDedicatedFailoverRipe
 * @date 02/07/2012
 */
class OvhTypeOrderDedicatedFailoverRipe extends OvhWsdlClass
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
	 * The address
	 * @var int
	 */
	public $address;
	/**
	 * The period
	 * @var int
	 */
	public $period;
	/**
	 * The payWithPoints
	 * @var boolean
	 */
	public $payWithPoints;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param int address
	 * @param int period
	 * @param boolean payWithPoints
	 * @return OvhTypeOrderDedicatedFailoverRipe
	 */
	public function __construct($_session = null,$_hostname = null,$_address = null,$_period = null,$_payWithPoints = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'address'=>$_address,'period'=>$_period,'payWithPoints'=>$_payWithPoints));
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
	 * Set address
	 * @param int address
	 * @return int
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return int
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set period
	 * @param int period
	 * @return int
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get period
	 * @return int
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set payWithPoints
	 * @param boolean payWithPoints
	 * @return boolean
	 */
	public function setPayWithPoints($_payWithPoints)
	{
		return ($this->payWithPoints = $_payWithPoints);
	}
	/**
	 * Get payWithPoints
	 * @return boolean
	 */
	public function getPayWithPoints()
	{
		return $this->payWithPoints;
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