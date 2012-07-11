<?php
/**
 * Class file for YMailServiceEmpty
 * @date 02/07/2012
 */
/**
 * Class YMailServiceEmpty
 * @date 02/07/2012
 */
class YMailServiceEmpty extends YMailWsdlClass
{
	/**
	 * Method to call EmptyFolder
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeEmptyFolder::getFid()
	 * @param YMailTypeEmptyFolder EmptyFolder
	 * @return YMailTypeEmptyFolderResponse
	 */
	public function EmptyFolder(YMailTypeEmptyFolder $_YMailTypeEmptyFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EmptyFolder(array('fid'=>$_YMailTypeEmptyFolder->getFid())));
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
	 * @return YMailTypeEmptyFolderResponse
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