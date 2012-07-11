<?php
/**
 * Class file for SPImagingTypeRenameResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeRenameResponse
 * @date 06/07/2012
 */
class SPImagingTypeRenameResponse extends SPImagingWsdlClass
{
	/**
	 * The RenameResult
	 * @var SPImagingTypeRenameResult
	 */
	public $RenameResult;
	/**
	 * Constructor
	 * @param SPImagingTypeRenameResult RenameResult
	 * @return SPImagingTypeRenameResponse
	 */
	public function __construct($_RenameResult = null)
	{
		parent::__construct(array('RenameResult'=>$_RenameResult));
	}
	/**
	 * Set RenameResult
	 * @param RenameResult RenameResult
	 * @return RenameResult
	 */
	public function setRenameResult($_RenameResult)
	{
		return ($this->RenameResult = $_RenameResult);
	}
	/**
	 * Get RenameResult
	 * @return SPImagingTypeRenameResult
	 */
	public function getRenameResult()
	{
		return $this->RenameResult;
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