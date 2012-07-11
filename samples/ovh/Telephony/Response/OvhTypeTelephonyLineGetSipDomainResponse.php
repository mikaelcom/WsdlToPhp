<?php
/**
 * Class file for OvhTypeTelephonyLineGetSipDomainResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineGetSipDomainResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineGetSipDomainResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonySipDomainStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySipDomainStruct return
	 * @return OvhTypeTelephonyLineGetSipDomainResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonySipDomainStruct return
	 * @return telephonySipDomainStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonySipDomainStruct
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