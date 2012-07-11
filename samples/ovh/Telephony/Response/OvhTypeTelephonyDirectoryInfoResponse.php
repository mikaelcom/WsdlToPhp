<?php
/**
 * Class file for OvhTypeTelephonyDirectoryInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyDirectoryInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyDirectoryInfoReturn return
	 * @return OvhTypeTelephonyDirectoryInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyDirectoryInfoReturn return
	 * @return telephonyDirectoryInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyDirectoryInfoReturn
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