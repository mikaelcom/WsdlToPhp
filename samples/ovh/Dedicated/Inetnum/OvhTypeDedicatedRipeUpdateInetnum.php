<?php
/**
 * Class file for OvhTypeDedicatedRipeUpdateInetnum
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRipeUpdateInetnum
 * @date 02/07/2012
 */
class OvhTypeDedicatedRipeUpdateInetnum extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The block
	 * @var string
	 */
	public $block;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * The descr
	 * @var string
	 */
	public $descr;
	/**
	 * The ripeId
	 * @var string
	 */
	public $ripeId;
	/**
	 * Constructor
	 * @param string session
	 * @param string block
	 * @param string netname
	 * @param string descr
	 * @param string ripeId
	 * @return OvhTypeDedicatedRipeUpdateInetnum
	 */
	public function __construct($_session = null,$_block = null,$_netname = null,$_descr = null,$_ripeId = null)
	{
		parent::__construct(array('session'=>$_session,'block'=>$_block,'netname'=>$_netname,'descr'=>$_descr,'ripeId'=>$_ripeId));
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
	 * Set block
	 * @param string block
	 * @return string
	 */
	public function setBlock($_block)
	{
		return ($this->block = $_block);
	}
	/**
	 * Get block
	 * @return string
	 */
	public function getBlock()
	{
		return $this->block;
	}
	/**
	 * Set netname
	 * @param string netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get netname
	 * @return string
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set descr
	 * @param string descr
	 * @return string
	 */
	public function setDescr($_descr)
	{
		return ($this->descr = $_descr);
	}
	/**
	 * Get descr
	 * @return string
	 */
	public function getDescr()
	{
		return $this->descr;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>