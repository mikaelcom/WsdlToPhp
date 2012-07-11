<?php
/**
 * Class file for OvhTypeNotepadSet
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNotepadSet
 * @date 02/07/2012
 */
class OvhTypeNotepadSet extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The content
	 * @var string
	 */
	public $content;
	/**
	 * Constructor
	 * @param string session
	 * @param string content
	 * @return OvhTypeNotepadSet
	 */
	public function __construct($_session = null,$_content = null)
	{
		parent::__construct(array('session'=>$_session,'content'=>$_content));
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
	 * Set content
	 * @param string content
	 * @return string
	 */
	public function setContent($_content)
	{
		return ($this->content = $_content);
	}
	/**
	 * Get content
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
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