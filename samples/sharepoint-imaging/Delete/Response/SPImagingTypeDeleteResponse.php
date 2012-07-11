<?php
/**
 * Class file for SPImagingTypeDeleteResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeDeleteResponse
 * @date 06/07/2012
 */
class SPImagingTypeDeleteResponse extends SPImagingWsdlClass
{
	/**
	 * The DeleteResult
	 * @var SPImagingTypeDeleteResult
	 */
	public $DeleteResult;
	/**
	 * Constructor
	 * @param SPImagingTypeDeleteResult DeleteResult
	 * @return SPImagingTypeDeleteResponse
	 */
	public function __construct($_DeleteResult = null)
	{
		parent::__construct(array('DeleteResult'=>$_DeleteResult));
	}
	/**
	 * Set DeleteResult
	 * @param DeleteResult DeleteResult
	 * @return DeleteResult
	 */
	public function setDeleteResult($_DeleteResult)
	{
		return ($this->DeleteResult = $_DeleteResult);
	}
	/**
	 * Get DeleteResult
	 * @return SPImagingTypeDeleteResult
	 */
	public function getDeleteResult()
	{
		return $this->DeleteResult;
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