<?php
/**
 * Class file for SPViewsServiceAdd
 * @date 06/07/2012
 */
/**
 * Class SPViewsServiceAdd
 * @date 06/07/2012
 */
class SPViewsServiceAdd extends SPViewsWsdlClass
{
	/**
	 * Method to call AddView
	 * @uses SPViewsWsdlClass::getSoapClient()
	 * @uses SPViewsWsdlClass::setResult()
	 * @uses SPViewsWsdlClass::getResult()
	 * @uses SPViewsWsdlClass::saveLastError()
	 * @uses SPViewsTypeAddView::getListName()
	 * @uses SPViewsTypeAddView::getViewName()
	 * @uses SPViewsTypeAddView::getViewFields()
	 * @uses SPViewsTypeAddView::getQuery()
	 * @uses SPViewsTypeAddView::getRowLimit()
	 * @uses SPViewsTypeAddView::getType()
	 * @uses SPViewsTypeAddView::getMakeViewDefault()
	 * @param SPViewsTypeAddView AddView
	 * @return SPViewsTypeAddViewResponse
	 */
	public function AddView(SPViewsTypeAddView $_SPViewsTypeAddView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddView(array('listName'=>$_SPViewsTypeAddView->getListName(),'viewName'=>$_SPViewsTypeAddView->getViewName(),'viewFields'=>$_SPViewsTypeAddView->getViewFields(),'query'=>$_SPViewsTypeAddView->getQuery(),'rowLimit'=>$_SPViewsTypeAddView->getRowLimit(),'type'=>$_SPViewsTypeAddView->getType(),'makeViewDefault'=>$_SPViewsTypeAddView->getMakeViewDefault())));
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
	 * @return SPViewsTypeAddViewResponse
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