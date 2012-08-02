<?php
/**
 * Class file for LifePicsServiceUpload
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceUpload
 * @date 02/08/2012
 */
class LifePicsServiceUpload extends LifePicsWsdlClass
{
	/**
	 * Method to call UploadFile
	 * Meta informations :
	 * 	- documentation : Used for uploading images with a watermark and exclusive to a specific merchant with tags to a specific album
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeUploadFile::getSessionID()
	 * @uses LifePicsTypeUploadFile::getPartnerSourceID()
	 * @uses LifePicsTypeUploadFile::getUserID()
	 * @uses LifePicsTypeUploadFile::getFileBinaryArray()
	 * @uses LifePicsTypeUploadFile::getFileStreamSize()
	 * @uses LifePicsTypeUploadFile::getFilename()
	 * @param LifePicsTypeUploadFile UploadFile
	 * @return LifePicsTypeUploadFileResponse
	 */
	public function UploadFile(LifePicsTypeUploadFile $_LifePicsTypeUploadFile)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UploadFile(array('SessionID'=>$_LifePicsTypeUploadFile->getSessionID(),'PartnerSourceID'=>$_LifePicsTypeUploadFile->getPartnerSourceID(),'UserID'=>$_LifePicsTypeUploadFile->getUserID(),'FileBinaryArray'=>$_LifePicsTypeUploadFile->getFileBinaryArray(),'FileStreamSize'=>$_LifePicsTypeUploadFile->getFileStreamSize(),'Filename'=>$_LifePicsTypeUploadFile->getFilename())));
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
	 * @return LifePicsTypeUploadFileResponse
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