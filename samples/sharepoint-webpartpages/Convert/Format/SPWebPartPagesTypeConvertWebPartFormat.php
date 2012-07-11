<?php
/**
 * Class file for SPWebPartPagesTypeConvertWebPartFormat
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeConvertWebPartFormat
 * @date 06/07/2012
 */
class SPWebPartPagesTypeConvertWebPartFormat extends SPWebPartPagesWsdlClass
{
	/**
	 * The inputFormat
	 * @var string
	 */
	public $inputFormat;
	/**
	 * The formatConversionOption
	 * @var FormatConversionOption
	 */
	public $formatConversionOption;
	/**
	 * Constructor
	 * @param string inputFormat
	 * @param FormatConversionOption formatConversionOption
	 * @return SPWebPartPagesTypeConvertWebPartFormat
	 */
	public function __construct($_inputFormat = null,$_formatConversionOption = null)
	{
		parent::__construct(array('inputFormat'=>$_inputFormat,'formatConversionOption'=>$_formatConversionOption));
	}
	/**
	 * Set inputFormat
	 * @param string inputFormat
	 * @return string
	 */
	public function setInputFormat($_inputFormat)
	{
		return ($this->inputFormat = $_inputFormat);
	}
	/**
	 * Get inputFormat
	 * @return string
	 */
	public function getInputFormat()
	{
		return $this->inputFormat;
	}
	/**
	 * Set formatConversionOption
	 * @param FormatConversionOption formatConversionOption
	 * @return FormatConversionOption
	 */
	public function setFormatConversionOption($_formatConversionOption)
	{
		return ($this->formatConversionOption = $_formatConversionOption);
	}
	/**
	 * Get formatConversionOption
	 * @return FormatConversionOption
	 */
	public function getFormatConversionOption()
	{
		return $this->formatConversionOption;
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