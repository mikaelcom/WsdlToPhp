<?php
/**
 * Class file for SPImagingServiceEdit
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceEdit
 * @date 06/07/2012
 */
class SPImagingServiceEdit extends SPImagingWsdlClass
{
	/**
	 * Method to call Edit
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeEdit::getStrListName()
	 * @uses SPImagingTypeEdit::getStrFolder()
	 * @uses SPImagingTypeEdit::getItemFileName()
	 * @uses SPImagingTypeEdit::getRecipe()
	 * @param SPImagingTypeEdit Edit
	 * @return SPImagingTypeEditResponse
	 */
	public function Edit(SPImagingTypeEdit $_SPImagingTypeEdit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Edit(array('strListName'=>$_SPImagingTypeEdit->getStrListName(),'strFolder'=>$_SPImagingTypeEdit->getStrFolder(),'itemFileName'=>$_SPImagingTypeEdit->getItemFileName(),'recipe'=>$_SPImagingTypeEdit->getRecipe())));
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
	 * @return SPImagingTypeEditResponse
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