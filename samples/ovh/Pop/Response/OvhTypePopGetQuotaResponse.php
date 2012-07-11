<?php
/**
 * Class file for OvhTypePopGetQuotaResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypePopGetQuotaResponse
 * @date 02/07/2012
 */
class OvhTypePopGetQuotaResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypePopGetQuotaReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypePopGetQuotaReturn return
	 * @return OvhTypePopGetQuotaResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param popGetQuotaReturn return
	 * @return popGetQuotaReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypepopGetQuotaReturn
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