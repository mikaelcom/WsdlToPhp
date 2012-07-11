<?php
/**
 * Class file for OvhTypeTelephonyFaxOptionsListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxOptionsListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxOptionsListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyFaxOptionsListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFaxOptionsListReturn return
	 * @return OvhTypeTelephonyFaxOptionsListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyFaxOptionsListReturn return
	 * @return telephonyFaxOptionsListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyFaxOptionsListReturn
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