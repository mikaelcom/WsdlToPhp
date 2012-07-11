<?php
/**
 * Class file for OvhTypeCmsAvailableListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCmsAvailableListResponse
 * @date 02/07/2012
 */
class OvhTypeCmsAvailableListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfCmsAvailableStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfCmsAvailableStructType return
	 * @return OvhTypeCmsAvailableListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfCmsAvailableStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfCmsAvailableStructType return
	 * @return MyArrayOfCmsAvailableStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfCmsAvailableStructType
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