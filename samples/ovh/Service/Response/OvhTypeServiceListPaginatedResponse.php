<?php
/**
 * Class file for OvhTypeServiceListPaginatedResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceListPaginatedResponse
 * @date 02/07/2012
 */
class OvhTypeServiceListPaginatedResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeServiceListPaginatedStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeServiceListPaginatedStruct return
	 * @return OvhTypeServiceListPaginatedResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param serviceListPaginatedStruct return
	 * @return serviceListPaginatedStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeserviceListPaginatedStruct
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