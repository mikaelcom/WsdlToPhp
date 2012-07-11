<?php
/**
 * Class file for YMailServiceRemove
 * @date 02/07/2012
 */
/**
 * Class YMailServiceRemove
 * @date 02/07/2012
 */
class YMailServiceRemove extends YMailWsdlClass
{
	/**
	 * Method to call RemoveFolder
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeRemoveFolder::getFid()
	 * @param YMailTypeRemoveFolder RemoveFolder
	 * @return YMailTypeRemoveFolderResponse
	 */
	public function RemoveFolder(YMailTypeRemoveFolder $_YMailTypeRemoveFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveFolder(array('fid'=>$_YMailTypeRemoveFolder->getFid())));
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
	 * @return YMailTypeRemoveFolderResponse
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