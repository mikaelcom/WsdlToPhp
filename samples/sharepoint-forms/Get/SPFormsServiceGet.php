<?php
/**
 * Class file for SPFormsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPFormsServiceGet
 * @date 06/07/2012
 */
class SPFormsServiceGet extends SPFormsWsdlClass
{
	/**
	 * Method to call GetFormCollection
	 * @uses SPFormsWsdlClass::getSoapClient()
	 * @uses SPFormsWsdlClass::setResult()
	 * @uses SPFormsWsdlClass::getResult()
	 * @uses SPFormsWsdlClass::saveLastError()
	 * @uses SPFormsTypeGetFormCollection::getListName()
	 * @param SPFormsTypeGetFormCollection GetFormCollection
	 * @return SPFormsTypeGetFormCollectionResponse
	 */
	public function GetFormCollection(SPFormsTypeGetFormCollection $_SPFormsTypeGetFormCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFormCollection(array('listName'=>$_SPFormsTypeGetFormCollection->getListName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetForm
	 * @uses SPFormsWsdlClass::getSoapClient()
	 * @uses SPFormsWsdlClass::setResult()
	 * @uses SPFormsWsdlClass::getResult()
	 * @uses SPFormsWsdlClass::saveLastError()
	 * @uses SPFormsTypeGetForm::getListName()
	 * @uses SPFormsTypeGetForm::getFormUrl()
	 * @param SPFormsTypeGetForm GetForm
	 * @return SPFormsTypeGetFormResponse
	 */
	public function GetForm(SPFormsTypeGetForm $_SPFormsTypeGetForm)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetForm(array('listName'=>$_SPFormsTypeGetForm->getListName(),'formUrl'=>$_SPFormsTypeGetForm->getFormUrl())));
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
	 * @return SPFormsTypeGetFormResponse
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