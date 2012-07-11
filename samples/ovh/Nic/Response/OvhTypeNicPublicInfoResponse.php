<?php
/**
 * Class file for OvhTypeNicPublicInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicPublicInfoResponse
 * @date 02/07/2012
 */
class OvhTypeNicPublicInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeNicPublicInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeNicPublicInfoReturn return
	 * @return OvhTypeNicPublicInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param nicPublicInfoReturn return
	 * @return nicPublicInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypenicPublicInfoReturn
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