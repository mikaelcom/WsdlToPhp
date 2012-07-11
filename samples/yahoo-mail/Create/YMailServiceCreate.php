<?php
/**
 * Class file for YMailServiceCreate
 * @date 02/07/2012
 */
/**
 * Class YMailServiceCreate
 * @date 02/07/2012
 */
class YMailServiceCreate extends YMailWsdlClass
{
	/**
	 * Method to call CreateFolder
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeCreateFolder::getName()
	 * @param YMailTypeCreateFolder CreateFolder
	 * @return YMailTypeCreateFolderResponse
	 */
	public function CreateFolder(YMailTypeCreateFolder $_YMailTypeCreateFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateFolder(array('name'=>$_YMailTypeCreateFolder->getName())));
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
	 * @return YMailTypeCreateFolderResponse
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