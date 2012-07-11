<?php
/**
 * Class file for OvhTypeNicTldEligibilityResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicTldEligibilityResponse
 * @date 02/07/2012
 */
class OvhTypeNicTldEligibilityResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var boolean
	 */
	public $return;
	/**
	 * Constructor
	 * @param boolean return
	 * @return OvhTypeNicTldEligibilityResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param boolean return
	 * @return boolean
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return boolean
	 */
	public function getReturn()
	{
		return $this->return;
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