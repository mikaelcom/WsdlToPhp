<?php
/**
 * Class file for OvhTypeManagedServicesSnapshotUpdate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesSnapshotUpdate
 * @date 02/07/2012
 */
class OvhTypeManagedServicesSnapshotUpdate extends OvhWsdlClass
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
	 * The snapShotList
	 * @var string
	 */
	public $snapShotList;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string snapShotList
	 * @return OvhTypeManagedServicesSnapshotUpdate
	 */
	public function __construct($_session = null,$_domain = null,$_snapShotList = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'snapShotList'=>$_snapShotList));
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
	 * Set snapShotList
	 * @param string snapShotList
	 * @return string
	 */
	public function setSnapShotList($_snapShotList)
	{
		return ($this->snapShotList = $_snapShotList);
	}
	/**
	 * Get snapShotList
	 * @return string
	 */
	public function getSnapShotList()
	{
		return $this->snapShotList;
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