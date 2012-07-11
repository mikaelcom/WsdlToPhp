<?php
/**
 * Class file for OvhTypeOrderDedicatedFailover
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderDedicatedFailover
 * @date 02/07/2012
 */
class OvhTypeOrderDedicatedFailover extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The orderIps
	 * @var int
	 */
	public $orderIps;
	/**
	 * The payWithPoints
	 * @var boolean
	 */
	public $payWithPoints;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param int orderIps
	 * @param boolean payWithPoints
	 * @return OvhTypeOrderDedicatedFailover
	 */
	public function __construct($_session = null,$_domain = null,$_orderIps = null,$_payWithPoints = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'orderIps'=>$_orderIps,'payWithPoints'=>$_payWithPoints));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set orderIps
	 * @param int orderIps
	 * @return int
	 */
	public function setOrderIps($_orderIps)
	{
		return ($this->orderIps = $_orderIps);
	}
	/**
	 * Get orderIps
	 * @return int
	 */
	public function getOrderIps()
	{
		return $this->orderIps;
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