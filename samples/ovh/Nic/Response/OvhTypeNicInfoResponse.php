<?php
/**
 * Class file for OvhTypeNicInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicInfoResponse
 * @date 02/07/2012
 */
class OvhTypeNicInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeNicInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeNicInfoReturn return
	 * @return OvhTypeNicInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param nicInfoReturn return
	 * @return nicInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypenicInfoReturn
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