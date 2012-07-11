<?php
/**
 * Class file for YMailServiceDelete
 * @date 02/07/2012
 */
/**
 * Class YMailServiceDelete
 * @date 02/07/2012
 */
class YMailServiceDelete extends YMailWsdlClass
{
	/**
	 * Method to call DeleteMessages
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeDeleteMessages::getFid()
	 * @uses YMailTypeDeleteMessages::getMid()
	 * @uses YMailTypeDeleteMessages::getSelection()
	 * @param YMailTypeDeleteMessages DeleteMessages
	 * @return YMailTypeDeleteMessagesResponse
	 */
	public function DeleteMessages(YMailTypeDeleteMessages $_YMailTypeDeleteMessages)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteMessages(array('fid'=>$_YMailTypeDeleteMessages->getFid(),'mid'=>$_YMailTypeDeleteMessages->getMid(),'selection'=>$_YMailTypeDeleteMessages->getSelection())));
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
	 * @return YMailTypeDeleteMessagesResponse
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