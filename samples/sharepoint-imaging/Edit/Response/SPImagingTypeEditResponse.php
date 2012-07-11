<?php
/**
 * Class file for SPImagingTypeEditResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeEditResponse
 * @date 06/07/2012
 */
class SPImagingTypeEditResponse extends SPImagingWsdlClass
{
	/**
	 * The EditResult
	 * @var SPImagingTypeEditResult
	 */
	public $EditResult;
	/**
	 * Constructor
	 * @param SPImagingTypeEditResult EditResult
	 * @return SPImagingTypeEditResponse
	 */
	public function __construct($_EditResult = null)
	{
		parent::__construct(array('EditResult'=>$_EditResult));
	}
	/**
	 * Set EditResult
	 * @param EditResult EditResult
	 * @return EditResult
	 */
	public function setEditResult($_EditResult)
	{
		return ($this->EditResult = $_EditResult);
	}
	/**
	 * Get EditResult
	 * @return SPImagingTypeEditResult
	 */
	public function getEditResult()
	{
		return $this->EditResult;
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