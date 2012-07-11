<?php
/**
 * Class file for SPViewsServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPViewsServiceDelete
 * @date 06/07/2012
 */
class SPViewsServiceDelete extends SPViewsWsdlClass
{
	/**
	 * Method to call DeleteView
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeDeleteView::getListName()
	 * @uses SPViewsTypeDeleteView::getViewName()
	 * @param SPViewsTypeDeleteView DeleteView
	 * @return SPViewsTypeDeleteViewResponse
	 */
	public function DeleteView(SPViewsTypeDeleteView $_SPViewsTypeDeleteView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteView(array('listName'=>$_SPViewsTypeDeleteView->getListName(),'viewName'=>$_SPViewsTypeDeleteView->getViewName())));
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
	 * @return SPViewsTypeDeleteViewResponse
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