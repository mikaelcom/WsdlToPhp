<?php
/**
 * Class file for SPWebPartPagesServiceRender
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceRender
 * @date 06/07/2012
 */
class SPWebPartPagesServiceRender extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call RenderWebPartForEdit
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeRenderWebPartForEdit::getWebPartXml()
	 * @param SPWebPartPagesTypeRenderWebPartForEdit RenderWebPartForEdit
	 * @return SPWebPartPagesTypeRenderWebPartForEditResponse
	 */
	public function RenderWebPartForEdit(SPWebPartPagesTypeRenderWebPartForEdit $_SPWebPartPagesTypeRenderWebPartForEdit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RenderWebPartForEdit(array('webPartXml'=>$_SPWebPartPagesTypeRenderWebPartForEdit->getWebPartXml())));
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
	 * @return SPWebPartPagesTypeRenderWebPartForEditResponse
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