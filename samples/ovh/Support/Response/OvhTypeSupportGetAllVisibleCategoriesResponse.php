<?php
/**
 * Class file for OvhTypeSupportGetAllVisibleCategoriesResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportGetAllVisibleCategoriesResponse
 * @date 02/07/2012
 */
class OvhTypeSupportGetAllVisibleCategoriesResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSupportCategoryStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSupportCategoryStructType return
	 * @return OvhTypeSupportGetAllVisibleCategoriesResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSupportCategoryStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSupportCategoryStructType return
	 * @return MyArrayOfSupportCategoryStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSupportCategoryStructType
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