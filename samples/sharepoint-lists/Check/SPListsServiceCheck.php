<?php
/**
 * Class file for SPListsServiceCheck
 * @date 07/07/2012
 */
/**
 * Class SPListsServiceCheck
 * @date 07/07/2012
 */
class SPListsServiceCheck extends SPListsWsdlClass
{
	/**
	 * Method to call CheckOutFile
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeCheckOutFile::getPageUrl()
	 * @uses SPListsTypeCheckOutFile::getCheckoutToLocal()
	 * @uses SPListsTypeCheckOutFile::getLastmodified()
	 * @param SPListsTypeCheckOutFile CheckOutFile
	 * @return SPListsTypeCheckOutFileResponse
	 */
	public function CheckOutFile(SPListsTypeCheckOutFile $_SPListsTypeCheckOutFile)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckOutFile(array('pageUrl'=>$_SPListsTypeCheckOutFile->getPageUrl(),'checkoutToLocal'=>$_SPListsTypeCheckOutFile->getCheckoutToLocal(),'lastmodified'=>$_SPListsTypeCheckOutFile->getLastmodified())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CheckInFile
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeCheckInFile::getPageUrl()
	 * @uses SPListsTypeCheckInFile::getComment()
	 * @uses SPListsTypeCheckInFile::getCheckinType()
	 * @param SPListsTypeCheckInFile CheckInFile
	 * @return SPListsTypeCheckInFileResponse
	 */
	public function CheckInFile(SPListsTypeCheckInFile $_SPListsTypeCheckInFile)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckInFile(array('pageUrl'=>$_SPListsTypeCheckInFile->getPageUrl(),'comment'=>$_SPListsTypeCheckInFile->getComment(),'CheckinType'=>$_SPListsTypeCheckInFile->getCheckinType())));
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
	 * @return SPListsTypeCheckInFileResponse
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