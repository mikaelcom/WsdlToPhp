<?php
/**
 * Class file for OvhTypeSupportGetThreads
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportGetThreads
 * @date 02/07/2012
 */
class OvhTypeSupportGetThreads extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The page
	 * @var int
	 */
	public $page;
	/**
	 * The view
	 * @var string
	 */
	public $view;
	/**
	 * The unread
	 * @var boolean
	 */
	public $unread;
	/**
	 * The sortDir
	 * @var string
	 */
	public $sortDir;
	/**
	 * The sortBy
	 * @var string
	 */
	public $sortBy;
	/**
	 * The limit
	 * @var int
	 */
	public $limit;
	/**
	 * Constructor
	 * @param string session
	 * @param int page
	 * @param string view
	 * @param boolean unread
	 * @param string sortDir
	 * @param string sortBy
	 * @param int limit
	 * @return OvhTypeSupportGetThreads
	 */
	public function __construct($_session = null,$_page = null,$_view = null,$_unread = null,$_sortDir = null,$_sortBy = null,$_limit = null)
	{
		parent::__construct(array('session'=>$_session,'page'=>$_page,'view'=>$_view,'unread'=>$_unread,'sortDir'=>$_sortDir,'sortBy'=>$_sortBy,'limit'=>$_limit));
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
	 * Set view
	 * @param string view
	 * @return string
	 */
	public function setView($_view)
	{
		return ($this->view = $_view);
	}
	/**
	 * Get view
	 * @return string
	 */
	public function getView()
	{
		return $this->view;
	}
	/**
	 * Set unread
	 * @param boolean unread
	 * @return boolean
	 */
	public function setUnread($_unread)
	{
		return ($this->unread = $_unread);
	}
	/**
	 * Get unread
	 * @return boolean
	 */
	public function getUnread()
	{
		return $this->unread;
	}
	/**
	 * Set sortDir
	 * @param string sortDir
	 * @return string
	 */
	public function setSortDir($_sortDir)
	{
		return ($this->sortDir = $_sortDir);
	}
	/**
	 * Get sortDir
	 * @return string
	 */
	public function getSortDir()
	{
		return $this->sortDir;
	}
	/**
	 * Set sortBy
	 * @param string sortBy
	 * @return string
	 */
	public function setSortBy($_sortBy)
	{
		return ($this->sortBy = $_sortBy);
	}
	/**
	 * Get sortBy
	 * @return string
	 */
	public function getSortBy()
	{
		return $this->sortBy;
	}
	/**
	 * Set limit
	 * @param int limit
	 * @return int
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Get limit
	 * @return int
	 */
	public function getLimit()
	{
		return $this->limit;
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