<?php
/**
 * Class file for SPViewsServiceUpdate
 * @date 06/07/2012
 */
/**
 * Class SPViewsServiceUpdate
 * @date 06/07/2012
 */
class SPViewsServiceUpdate extends SPViewsWsdlClass
{
	/**
	 * Method to call UpdateView
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeUpdateView::getListName()
	 * @uses SPViewsTypeUpdateView::getViewName()
	 * @uses SPViewsTypeUpdateView::getViewProperties()
	 * @uses SPViewsTypeUpdateView::getQuery()
	 * @uses SPViewsTypeUpdateView::getViewFields()
	 * @uses SPViewsTypeUpdateView::getAggregations()
	 * @uses SPViewsTypeUpdateView::getFormats()
	 * @uses SPViewsTypeUpdateView::getRowLimit()
	 * @param SPViewsTypeUpdateView UpdateView
	 * @return SPViewsTypeUpdateViewResponse
	 */
	public function UpdateView(SPViewsTypeUpdateView $_SPViewsTypeUpdateView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateView(array('listName'=>$_SPViewsTypeUpdateView->getListName(),'viewName'=>$_SPViewsTypeUpdateView->getViewName(),'viewProperties'=>$_SPViewsTypeUpdateView->getViewProperties(),'query'=>$_SPViewsTypeUpdateView->getQuery(),'viewFields'=>$_SPViewsTypeUpdateView->getViewFields(),'aggregations'=>$_SPViewsTypeUpdateView->getAggregations(),'formats'=>$_SPViewsTypeUpdateView->getFormats(),'rowLimit'=>$_SPViewsTypeUpdateView->getRowLimit())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateViewHtml
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeUpdateViewHtml::getListName()
	 * @uses SPViewsTypeUpdateViewHtml::getViewName()
	 * @uses SPViewsTypeUpdateViewHtml::getViewProperties()
	 * @uses SPViewsTypeUpdateViewHtml::getToolbar()
	 * @uses SPViewsTypeUpdateViewHtml::getViewHeader()
	 * @uses SPViewsTypeUpdateViewHtml::getViewBody()
	 * @uses SPViewsTypeUpdateViewHtml::getViewFooter()
	 * @uses SPViewsTypeUpdateViewHtml::getViewEmpty()
	 * @uses SPViewsTypeUpdateViewHtml::getRowLimitExceeded()
	 * @uses SPViewsTypeUpdateViewHtml::getQuery()
	 * @uses SPViewsTypeUpdateViewHtml::getViewFields()
	 * @uses SPViewsTypeUpdateViewHtml::getAggregations()
	 * @uses SPViewsTypeUpdateViewHtml::getFormats()
	 * @uses SPViewsTypeUpdateViewHtml::getRowLimit()
	 * @param SPViewsTypeUpdateViewHtml UpdateViewHtml
	 * @return SPViewsTypeUpdateViewHtmlResponse
	 */
	public function UpdateViewHtml(SPViewsTypeUpdateViewHtml $_SPViewsTypeUpdateViewHtml)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateViewHtml(array('listName'=>$_SPViewsTypeUpdateViewHtml->getListName(),'viewName'=>$_SPViewsTypeUpdateViewHtml->getViewName(),'viewProperties'=>$_SPViewsTypeUpdateViewHtml->getViewProperties(),'toolbar'=>$_SPViewsTypeUpdateViewHtml->getToolbar(),'viewHeader'=>$_SPViewsTypeUpdateViewHtml->getViewHeader(),'viewBody'=>$_SPViewsTypeUpdateViewHtml->getViewBody(),'viewFooter'=>$_SPViewsTypeUpdateViewHtml->getViewFooter(),'viewEmpty'=>$_SPViewsTypeUpdateViewHtml->getViewEmpty(),'rowLimitExceeded'=>$_SPViewsTypeUpdateViewHtml->getRowLimitExceeded(),'query'=>$_SPViewsTypeUpdateViewHtml->getQuery(),'viewFields'=>$_SPViewsTypeUpdateViewHtml->getViewFields(),'aggregations'=>$_SPViewsTypeUpdateViewHtml->getAggregations(),'formats'=>$_SPViewsTypeUpdateViewHtml->getFormats(),'rowLimit'=>$_SPViewsTypeUpdateViewHtml->getRowLimit())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateViewHtml2
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeUpdateViewHtml2::getListName()
	 * @uses SPViewsTypeUpdateViewHtml2::getViewName()
	 * @uses SPViewsTypeUpdateViewHtml2::getViewProperties()
	 * @uses SPViewsTypeUpdateViewHtml2::getToolbar()
	 * @uses SPViewsTypeUpdateViewHtml2::getViewHeader()
	 * @uses SPViewsTypeUpdateViewHtml2::getViewBody()
	 * @uses SPViewsTypeUpdateViewHtml2::getViewFooter()
	 * @uses SPViewsTypeUpdateViewHtml2::getViewEmpty()
	 * @uses SPViewsTypeUpdateViewHtml2::getRowLimitExceeded()
	 * @uses SPViewsTypeUpdateViewHtml2::getQuery()
	 * @uses SPViewsTypeUpdateViewHtml2::getViewFields()
	 * @uses SPViewsTypeUpdateViewHtml2::getAggregations()
	 * @uses SPViewsTypeUpdateViewHtml2::getFormats()
	 * @uses SPViewsTypeUpdateViewHtml2::getRowLimit()
	 * @uses SPViewsTypeUpdateViewHtml2::getOpenApplicationExtension()
	 * @param SPViewsTypeUpdateViewHtml2 UpdateViewHtml2
	 * @return SPViewsTypeUpdateViewHtml2Response
	 */
	public function UpdateViewHtml2(SPViewsTypeUpdateViewHtml2 $_SPViewsTypeUpdateViewHtml2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateViewHtml2(array('listName'=>$_SPViewsTypeUpdateViewHtml2->getListName(),'viewName'=>$_SPViewsTypeUpdateViewHtml2->getViewName(),'viewProperties'=>$_SPViewsTypeUpdateViewHtml2->getViewProperties(),'toolbar'=>$_SPViewsTypeUpdateViewHtml2->getToolbar(),'viewHeader'=>$_SPViewsTypeUpdateViewHtml2->getViewHeader(),'viewBody'=>$_SPViewsTypeUpdateViewHtml2->getViewBody(),'viewFooter'=>$_SPViewsTypeUpdateViewHtml2->getViewFooter(),'viewEmpty'=>$_SPViewsTypeUpdateViewHtml2->getViewEmpty(),'rowLimitExceeded'=>$_SPViewsTypeUpdateViewHtml2->getRowLimitExceeded(),'query'=>$_SPViewsTypeUpdateViewHtml2->getQuery(),'viewFields'=>$_SPViewsTypeUpdateViewHtml2->getViewFields(),'aggregations'=>$_SPViewsTypeUpdateViewHtml2->getAggregations(),'formats'=>$_SPViewsTypeUpdateViewHtml2->getFormats(),'rowLimit'=>$_SPViewsTypeUpdateViewHtml2->getRowLimit(),'openApplicationExtension'=>$_SPViewsTypeUpdateViewHtml2->getOpenApplicationExtension())));
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
	 * @return SPViewsTypeUpdateViewHtml2Response
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