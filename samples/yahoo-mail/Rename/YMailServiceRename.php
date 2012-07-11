<?php
/**
 * Class file for YMailServiceRename
 * @date 02/07/2012
 */
/**
 * Class YMailServiceRename
 * @date 02/07/2012
 */
class YMailServiceRename extends YMailWsdlClass
{
	/**
	 * Method to call RenameFolder
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeRenameFolder::getFid()
	 * @uses YMailTypeRenameFolder::getName()
	 * @param YMailTypeRenameFolder RenameFolder
	 * @return YMailTypeRenameFolderResponse
	 */
	public function RenameFolder(YMailTypeRenameFolder $_YMailTypeRenameFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RenameFolder(array('fid'=>$_YMailTypeRenameFolder->getFid(),'name'=>$_YMailTypeRenameFolder->getName())));
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
	 * @return YMailTypeRenameFolderResponse
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