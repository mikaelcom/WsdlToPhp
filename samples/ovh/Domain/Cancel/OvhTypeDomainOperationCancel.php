<?php
/**
 * Class file for OvhTypeDomainOperationCancel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainOperationCancel
 * @date 02/07/2012
 */
class OvhTypeDomainOperationCancel extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * Constructor
	 * @param string session
	 * @param int id
	 * @return OvhTypeDomainOperationCancel
	 */
	public function __construct($_session = null,$_id = null)
	{
		parent::__construct(array('session'=>$_session,'id'=>$_id));
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
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
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