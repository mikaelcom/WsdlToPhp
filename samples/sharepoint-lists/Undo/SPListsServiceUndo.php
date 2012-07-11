<?php
/**
 * Class file for SPListsServiceUndo
 * @date 07/07/2012
 */
/**
 * Class SPListsServiceUndo
 * @date 07/07/2012
 */
class SPListsServiceUndo extends SPListsWsdlClass
{
	/**
	 * Method to call UndoCheckOut
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeUndoCheckOut::getPageUrl()
	 * @param SPListsTypeUndoCheckOut UndoCheckOut
	 * @return SPListsTypeUndoCheckOutResponse
	 */
	public function UndoCheckOut(SPListsTypeUndoCheckOut $_SPListsTypeUndoCheckOut)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UndoCheckOut(array('pageUrl'=>$_SPListsTypeUndoCheckOut->getPageUrl())));
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
	 * @return SPListsTypeUndoCheckOutResponse
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