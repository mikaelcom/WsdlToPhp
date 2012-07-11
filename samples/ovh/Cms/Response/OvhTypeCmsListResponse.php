<?php
/**
 * Class file for OvhTypeCmsListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCmsListResponse
 * @date 02/07/2012
 */
class OvhTypeCmsListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfCmsStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfCmsStructType return
	 * @return OvhTypeCmsListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfCmsStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfCmsStructType return
	 * @return MyArrayOfCmsStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfCmsStructType
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