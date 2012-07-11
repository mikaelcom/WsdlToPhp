<?php
/**
 * Class file for OvhTypeSqlpriveAlertInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveAlertInfoResponse
 * @date 02/07/2012
 */
class OvhTypeSqlpriveAlertInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeSqlpriveAlertInfotReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeSqlpriveAlertInfotReturn return
	 * @return OvhTypeSqlpriveAlertInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param sqlpriveAlertInfotReturn return
	 * @return sqlpriveAlertInfotReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypesqlpriveAlertInfotReturn
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