<?php
/**
 * Class file for SPWebPartPagesServiceConvert
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceConvert
 * @date 06/07/2012
 */
class SPWebPartPagesServiceConvert extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call ConvertWebPartFormat
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeConvertWebPartFormat::getInputFormat()
	 * @uses SPWebPartPagesTypeConvertWebPartFormat::getFormatConversionOption()
	 * @param SPWebPartPagesTypeConvertWebPartFormat ConvertWebPartFormat
	 * @return SPWebPartPagesTypeConvertWebPartFormatResponse
	 */
	public function ConvertWebPartFormat(SPWebPartPagesTypeConvertWebPartFormat $_SPWebPartPagesTypeConvertWebPartFormat)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConvertWebPartFormat(array('inputFormat'=>$_SPWebPartPagesTypeConvertWebPartFormat->getInputFormat(),'formatConversionOption'=>$_SPWebPartPagesTypeConvertWebPartFormat->getFormatConversionOption())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return SPWebPartPagesTypeConvertWebPartFormatResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>