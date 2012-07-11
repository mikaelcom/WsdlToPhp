<?php
/**
 * Class file for OvhTypeOverquotaInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOverquotaInfoResponse
 * @date 02/07/2012
 */
class OvhTypeOverquotaInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeOverquotaInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeOverquotaInfoReturn return
	 * @return OvhTypeOverquotaInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param overquotaInfoReturn return
	 * @return overquotaInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeoverquotaInfoReturn
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