<?php
/**
 * Class file for OvhTypeHostingChangeMainDomain
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingChangeMainDomain
 * @date 02/07/2012
 */
class OvhTypeHostingChangeMainDomain extends OvhWsdlClass
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
	 * The newDomain
	 * @var string
	 */
	public $newDomain;
	/**
	 * The mxAction
	 * @var string
	 */
	public $mxAction;
	/**
	 * The mxOffer
	 * @var string
	 */
	public $mxOffer;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string newDomain
	 * @param string mxAction
	 * @param string mxOffer
	 * @return OvhTypeHostingChangeMainDomain
	 */
	public function __construct($_session = null,$_domain = null,$_newDomain = null,$_mxAction = null,$_mxOffer = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'newDomain'=>$_newDomain,'mxAction'=>$_mxAction,'mxOffer'=>$_mxOffer));
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
	 * Set newDomain
	 * @param string newDomain
	 * @return string
	 */
	public function setNewDomain($_newDomain)
	{
		return ($this->newDomain = $_newDomain);
	}
	/**
	 * Get newDomain
	 * @return string
	 */
	public function getNewDomain()
	{
		return $this->newDomain;
	}
	/**
	 * Set mxAction
	 * @param string mxAction
	 * @return string
	 */
	public function setMxAction($_mxAction)
	{
		return ($this->mxAction = $_mxAction);
	}
	/**
	 * Get mxAction
	 * @return string
	 */
	public function getMxAction()
	{
		return $this->mxAction;
	}
	/**
	 * Set mxOffer
	 * @param string mxOffer
	 * @return string
	 */
	public function setMxOffer($_mxOffer)
	{
		return ($this->mxOffer = $_mxOffer);
	}
	/**
	 * Get mxOffer
	 * @return string
	 */
	public function getMxOffer()
	{
		return $this->mxOffer;
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