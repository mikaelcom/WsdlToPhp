<?php
/**
 * Class file for OvhTypeTelephonySmsGetUserQuotaForUserResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsGetUserQuotaForUserResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsGetUserQuotaForUserResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonySmsUserQuotaStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySmsUserQuotaStruct return
	 * @return OvhTypeTelephonySmsGetUserQuotaForUserResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonySmsUserQuotaStruct return
	 * @return telephonySmsUserQuotaStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonySmsUserQuotaStruct
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