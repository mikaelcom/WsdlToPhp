<?php
/**
 * Class file for YMailServiceList
 * @date 02/07/2012
 */
/**
 * Class YMailServiceList
 * @date 02/07/2012
 */
class YMailServiceList extends YMailWsdlClass
{
	/**
	 * Method to call ListFolders
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeListFolders::getResetMessengerUnseen()
	 * @param YMailTypeListFolders ListFolders
	 * @return YMailTypeListFoldersResponse
	 */
	public function ListFolders(YMailTypeListFolders $_YMailTypeListFolders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFolders(array('resetMessengerUnseen'=>$_YMailTypeListFolders->getResetMessengerUnseen())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListMessages
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeListMessages::getSortKey()
	 * @uses YMailTypeListMessages::getSortOrder()
	 * @uses YMailTypeListMessages::getFid()
	 * @uses YMailTypeListMessages::getFilterBy()
	 * @uses YMailTypeListMessages::getGroupBy()
	 * @uses YMailTypeListMessages::getStartMid()
	 * @uses YMailTypeListMessages::getStartInfo()
	 * @uses YMailTypeListMessages::getNumMid()
	 * @uses YMailTypeListMessages::getNumInfo()
	 * @uses YMailTypeListMessages::getOffsetMid()
	 * @uses YMailTypeListMessages::getLoc()
	 * @param YMailTypeListMessages ListMessages
	 * @return YMailTypeListMessagesResponse
	 */
	public function ListMessages(YMailTypeListMessages $_YMailTypeListMessages)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListMessages(array('sortKey'=>$_YMailTypeListMessages->getSortKey(),'sortOrder'=>$_YMailTypeListMessages->getSortOrder(),'fid'=>$_YMailTypeListMessages->getFid(),'filterBy'=>$_YMailTypeListMessages->getFilterBy(),'groupBy'=>$_YMailTypeListMessages->getGroupBy(),'startMid'=>$_YMailTypeListMessages->getStartMid(),'startInfo'=>$_YMailTypeListMessages->getStartInfo(),'numMid'=>$_YMailTypeListMessages->getNumMid(),'numInfo'=>$_YMailTypeListMessages->getNumInfo(),'offsetMid'=>$_YMailTypeListMessages->getOffsetMid(),'loc'=>$_YMailTypeListMessages->getLoc())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListMessagesFromIds
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeListMessagesFromIds::getFid()
	 * @uses YMailTypeListMessagesFromIds::getMid()
	 * @uses YMailTypeListMessagesFromIds::getCharsetHint()
	 * @param YMailTypeListMessagesFromIds ListMessagesFromIds
	 * @return YMailTypeListMessagesFromIdsResponse
	 */
	public function ListMessagesFromIds(YMailTypeListMessagesFromIds $_YMailTypeListMessagesFromIds)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListMessagesFromIds(array('fid'=>$_YMailTypeListMessagesFromIds->getFid(),'mid'=>$_YMailTypeListMessagesFromIds->getMid(),'charsetHint'=>$_YMailTypeListMessagesFromIds->getCharsetHint())));
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
	 * @return YMailTypeListMessagesFromIdsResponse
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