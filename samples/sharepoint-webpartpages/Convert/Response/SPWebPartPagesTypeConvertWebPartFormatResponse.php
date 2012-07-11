<?php
/**
 * Class file for SPWebPartPagesTypeConvertWebPartFormatResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeConvertWebPartFormatResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeConvertWebPartFormatResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The ConvertWebPartFormatResult
	 * @var string
	 */
	public $ConvertWebPartFormatResult;
	/**
	 * Constructor
	 * @param string ConvertWebPartFormatResult
	 * @return SPWebPartPagesTypeConvertWebPartFormatResponse
	 */
	public function __construct($_ConvertWebPartFormatResult = null)
	{
		parent::__construct(array('ConvertWebPartFormatResult'=>$_ConvertWebPartFormatResult));
	}
	/**
	 * Set ConvertWebPartFormatResult
	 * @param string ConvertWebPartFormatResult
	 * @return string
	 */
	public function setConvertWebPartFormatResult($_ConvertWebPartFormatResult)
	{
		return ($this->ConvertWebPartFormatResult = $_ConvertWebPartFormatResult);
	}
	/**
	 * Get ConvertWebPartFormatResult
	 * @return string
	 */
	public function getConvertWebPartFormatResult()
	{
		return $this->ConvertWebPartFormatResult;
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