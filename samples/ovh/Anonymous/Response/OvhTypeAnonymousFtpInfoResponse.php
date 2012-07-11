<?php
/**
 * Class file for OvhTypeAnonymousFtpInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAnonymousFtpInfoResponse
 * @date 02/07/2012
 */
class OvhTypeAnonymousFtpInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeAnonymousFtpInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeAnonymousFtpInfoReturn return
	 * @return OvhTypeAnonymousFtpInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param anonymousFtpInfoReturn return
	 * @return anonymousFtpInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeanonymousFtpInfoReturn
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