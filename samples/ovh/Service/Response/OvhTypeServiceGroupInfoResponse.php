<?php
/**
 * Class file for OvhTypeServiceGroupInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceGroupInfoResponse
 * @date 02/07/2012
 */
class OvhTypeServiceGroupInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeServiceGroupStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeServiceGroupStruct return
	 * @return OvhTypeServiceGroupInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param serviceGroupStruct return
	 * @return serviceGroupStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeserviceGroupStruct
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