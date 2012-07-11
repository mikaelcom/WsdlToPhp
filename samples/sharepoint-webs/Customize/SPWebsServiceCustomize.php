<?php
/**
 * Class file for SPWebsServiceCustomize
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceCustomize
 * @date 06/07/2012
 */
class SPWebsServiceCustomize extends SPWebsWsdlClass
{
	/**
	 * Method to call CustomizeCss
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeCustomizeCss::getCssFile()
	 * @param SPWebsTypeCustomizeCss CustomizeCss
	 * @return SPWebsTypeCustomizeCssResponse
	 */
	public function CustomizeCss(SPWebsTypeCustomizeCss $_SPWebsTypeCustomizeCss)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CustomizeCss(array('cssFile'=>$_SPWebsTypeCustomizeCss->getCssFile())));
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
	 * @return SPWebsTypeCustomizeCssResponse
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