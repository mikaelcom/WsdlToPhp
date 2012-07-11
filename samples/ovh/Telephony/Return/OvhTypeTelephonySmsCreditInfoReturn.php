<?php
/**
 * Class file for OvhTypeTelephonySmsCreditInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsCreditInfoReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsCreditInfoReturn extends OvhWsdlClass
{
	/**
	 * The waiting
	 * @var int
	 */
	public $waiting;
	/**
	 * The left
	 * @var int
	 */
	public $left;
	/**
	 * Constructor
	 * @param int waiting
	 * @param int left
	 * @return OvhTypeTelephonySmsCreditInfoReturn
	 */
	public function __construct($_waiting = null,$_left = null)
	{
		parent::__construct(array('waiting'=>$_waiting,'left'=>$_left));
	}
	/**
	 * Set waiting
	 * @param int waiting
	 * @return int
	 */
	public function setWaiting($_waiting)
	{
		return ($this->waiting = $_waiting);
	}
	/**
	 * Get waiting
	 * @return int
	 */
	public function getWaiting()
	{
		return $this->waiting;
	}
	/**
	 * Set left
	 * @param int left
	 * @return int
	 */
	public function setLeft($_left)
	{
		return ($this->left = $_left);
	}
	/**
	 * Get left
	 * @return int
	 */
	public function getLeft()
	{
		return $this->left;
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