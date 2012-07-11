<?php
/**
 * Class file for OvhTypeRpsMigrationGetProgressStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsMigrationGetProgressStatusResponse
 * @date 02/07/2012
 */
class OvhTypeRpsMigrationGetProgressStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeRpsMigrationGetProgressStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeRpsMigrationGetProgressStatusReturn return
	 * @return OvhTypeRpsMigrationGetProgressStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param rpsMigrationGetProgressStatusReturn return
	 * @return rpsMigrationGetProgressStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTyperpsMigrationGetProgressStatusReturn
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