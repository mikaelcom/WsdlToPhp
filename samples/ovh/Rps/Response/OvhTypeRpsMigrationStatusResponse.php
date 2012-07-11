<?php
/**
 * Class file for OvhTypeRpsMigrationStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsMigrationStatusResponse
 * @date 02/07/2012
 */
class OvhTypeRpsMigrationStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeRpsMigrationStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeRpsMigrationStatusReturn return
	 * @return OvhTypeRpsMigrationStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param rpsMigrationStatusReturn return
	 * @return rpsMigrationStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTyperpsMigrationStatusReturn
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