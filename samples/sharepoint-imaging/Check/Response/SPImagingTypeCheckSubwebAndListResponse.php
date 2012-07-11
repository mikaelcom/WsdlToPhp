<?php
/**
 * Class file for SPImagingTypeCheckSubwebAndListResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeCheckSubwebAndListResponse
 * @date 06/07/2012
 */
class SPImagingTypeCheckSubwebAndListResponse extends SPImagingWsdlClass
{
	/**
	 * The CheckSubwebAndListResult
	 * @var SPImagingTypeCheckSubwebAndListResult
	 */
	public $CheckSubwebAndListResult;
	/**
	 * Constructor
	 * @param SPImagingTypeCheckSubwebAndListResult CheckSubwebAndListResult
	 * @return SPImagingTypeCheckSubwebAndListResponse
	 */
	public function __construct($_CheckSubwebAndListResult = null)
	{
		parent::__construct(array('CheckSubwebAndListResult'=>$_CheckSubwebAndListResult));
	}
	/**
	 * Set CheckSubwebAndListResult
	 * @param CheckSubwebAndListResult CheckSubwebAndListResult
	 * @return CheckSubwebAndListResult
	 */
	public function setCheckSubwebAndListResult($_CheckSubwebAndListResult)
	{
		return ($this->CheckSubwebAndListResult = $_CheckSubwebAndListResult);
	}
	/**
	 * Get CheckSubwebAndListResult
	 * @return SPImagingTypeCheckSubwebAndListResult
	 */
	public function getCheckSubwebAndListResult()
	{
		return $this->CheckSubwebAndListResult;
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