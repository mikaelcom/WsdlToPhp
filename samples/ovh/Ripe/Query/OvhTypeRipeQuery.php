<?php
/**
 * Class file for OvhTypeRipeQuery
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeQuery
 * @date 02/07/2012
 */
class OvhTypeRipeQuery extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The search
	 * @var string
	 */
	public $search;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param string session
	 * @param string search
	 * @param string type
	 * @return OvhTypeRipeQuery
	 */
	public function __construct($_session = null,$_search = null,$_type = null)
	{
		parent::__construct(array('session'=>$_session,'search'=>$_search,'type'=>$_type));
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
	 * Set search
	 * @param string search
	 * @return string
	 */
	public function setSearch($_search)
	{
		return ($this->search = $_search);
	}
	/**
	 * Get search
	 * @return string
	 */
	public function getSearch()
	{
		return $this->search;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>