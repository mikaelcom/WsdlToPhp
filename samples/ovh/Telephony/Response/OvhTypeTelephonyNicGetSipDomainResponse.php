<?php
/**
 * Class file for OvhTypeTelephonyNicGetSipDomainResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNicGetSipDomainResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyNicGetSipDomainResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonySipDomainStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonySipDomainStructType return
	 * @return OvhTypeTelephonyNicGetSipDomainResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonySipDomainStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonySipDomainStructType return
	 * @return MyArrayOfTelephonySipDomainStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonySipDomainStructType
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