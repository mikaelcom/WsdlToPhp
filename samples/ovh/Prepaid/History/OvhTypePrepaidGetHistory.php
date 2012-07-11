<?php
/**
 * Class file for OvhTypePrepaidGetHistory
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidGetHistory
 * @date 02/07/2012
 */
class OvhTypePrepaidGetHistory extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The page
	 * @var int
	 */
	public $page;
	/**
	 * Constructor
	 * @param string session
	 * @param string nic
	 * @param int page
	 * @return OvhTypePrepaidGetHistory
	 */
	public function __construct($_session = null,$_nic = null,$_page = null)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'page'=>$_page));
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
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set page
	 * @param int page
	 * @return int
	 */
	public function setPage($_page)
	{
		return ($this->page = $_page);
	}
	/**
	 * Get page
	 * @return int
	 */
	public function getPage()
	{
		return $this->page;
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