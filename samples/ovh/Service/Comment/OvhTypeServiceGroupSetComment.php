<?php
/**
 * Class file for OvhTypeServiceGroupSetComment
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceGroupSetComment
 * @date 02/07/2012
 */
class OvhTypeServiceGroupSetComment extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor
	 * @param string session
	 * @param string name
	 * @param string comment
	 * @return OvhTypeServiceGroupSetComment
	 */
	public function __construct($_session = null,$_name = null,$_comment = null)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'comment'=>$_comment));
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
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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