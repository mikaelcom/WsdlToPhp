<?php
/**
 * Class file for OvhTypeDomainOperationInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainOperationInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDomainOperationInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeOperationStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeOperationStruct return
	 * @return OvhTypeDomainOperationInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param operationStruct return
	 * @return operationStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeoperationStruct
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