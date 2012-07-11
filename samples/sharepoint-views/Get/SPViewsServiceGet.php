<?php
/**
 * Class file for SPViewsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPViewsServiceGet
 * @date 06/07/2012
 */
class SPViewsServiceGet extends SPViewsWsdlClass
{
	/**
	 * Method to call GetView
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeGetView::getListName()
	 * @uses SPViewsTypeGetView::getViewName()
	 * @param SPViewsTypeGetView GetView
	 * @return SPViewsTypeGetViewResponse
	 */
	public function GetView(SPViewsTypeGetView $_SPViewsTypeGetView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetView(array('listName'=>$_SPViewsTypeGetView->getListName(),'viewName'=>$_SPViewsTypeGetView->getViewName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetViewHtml
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeGetViewHtml::getListName()
	 * @uses SPViewsTypeGetViewHtml::getViewName()
	 * @param SPViewsTypeGetViewHtml GetViewHtml
	 * @return SPViewsTypeGetViewHtmlResponse
	 */
	public function GetViewHtml(SPViewsTypeGetViewHtml $_SPViewsTypeGetViewHtml)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetViewHtml(array('listName'=>$_SPViewsTypeGetViewHtml->getListName(),'viewName'=>$_SPViewsTypeGetViewHtml->getViewName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetViewCollection
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeGetViewCollection::getListName()
	 * @param SPViewsTypeGetViewCollection GetViewCollection
	 * @return SPViewsTypeGetViewCollectionResponse
	 */
	public function GetViewCollection(SPViewsTypeGetViewCollection $_SPViewsTypeGetViewCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetViewCollection(array('listName'=>$_SPViewsTypeGetViewCollection->getListName())));
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
	 * @return SPViewsTypeGetViewCollectionResponse
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