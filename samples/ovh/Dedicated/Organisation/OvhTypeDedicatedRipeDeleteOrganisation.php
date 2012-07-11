<?php
/**
 * Class file for OvhTypeDedicatedRipeDeleteOrganisation
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRipeDeleteOrganisation
 * @date 02/07/2012
 */
class OvhTypeDedicatedRipeDeleteOrganisation extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ripeId
	 * @var string
	 */
	public $ripeId;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param string session
	 * @param string ripeId
	 * @param string comment
	 * @return OvhTypeDedicatedRipeDeleteOrganisation
	 */
	public function __construct($_session = null,$_ripeId = null,$_comment = null)
	{
		parent::__construct(array('session'=>$_session,'ripeId'=>$_ripeId,'comment'=>$_comment));
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
	 * Set ripeId
	 * @param string ripeId
	 * @return string
	 */
	public function setRipeId($_ripeId)
	{
		return ($this->ripeId = $_ripeId);
	}
	/**
	 * Get ripeId
	 * @return string
	 */
	public function getRipeId()
	{
		return $this->ripeId;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
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