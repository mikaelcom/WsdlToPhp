<?php
/**
 * Class file for OvhTypeNotepadAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNotepadAdd
 * @date 02/07/2012
 */
class OvhTypeNotepadAdd extends OvhWsdlClass
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
	 * The offset
	 * @var string
	 */
	public $offset;
	/**
	 * Constructor
	 * @param string session
	 * @param string content
	 * @param string offset
	 * @return OvhTypeNotepadAdd
	 */
	public function __construct($_session = null,$_content = null,$_offset = null)
	{
		parent::__construct(array('session'=>$_session,'content'=>$_content,'offset'=>$_offset));
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
	 * Set offset
	 * @param string offset
	 * @return string
	 */
	public function setOffset($_offset)
	{
		return ($this->offset = $_offset);
	}
	/**
	 * Get offset
	 * @return string
	 */
	public function getOffset()
	{
		return $this->offset;
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