<?php
/**
 * Class file for OvhTypeOrderEmailMxPlan
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderEmailMxPlan
 * @date 02/07/2012
 */
class OvhTypeOrderEmailMxPlan extends OvhWsdlClass
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
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The payWithPoints
	 * @var boolean
	 */
	public $payWithPoints;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string type
	 * @param boolean payWithPoints
	 * @return OvhTypeOrderEmailMxPlan
	 */
	public function __construct($_session = null,$_domain = null,$_type = null,$_payWithPoints = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'type'=>$_type,'payWithPoints'=>$_payWithPoints));
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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