<?php
/**
 * Class file for OvhTypeFtpInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeFtpInfoResponse
 * @date 02/07/2012
 */
class OvhTypeFtpInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeFtpInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeFtpInfoReturn return
	 * @return OvhTypeFtpInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param ftpInfoReturn return
	 * @return ftpInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeftpInfoReturn
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