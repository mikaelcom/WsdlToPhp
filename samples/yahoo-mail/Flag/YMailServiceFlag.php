<?php
/**
 * Class file for YMailServiceFlag
 * @date 02/07/2012
 */
/**
 * Class YMailServiceFlag
 * @date 02/07/2012
 */
class YMailServiceFlag extends YMailWsdlClass
{
	/**
	 * Method to call FlagMessages
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeFlagMessages::getFid()
	 * @uses YMailTypeFlagMessages::getMid()
	 * @uses YMailTypeFlagMessages::getSetFlags()
	 * @uses YMailTypeFlagMessages::getSelection()
	 * @param YMailTypeFlagMessages FlagMessages
	 * @return YMailTypeFlagMessagesResponse
	 */
	public function FlagMessages(YMailTypeFlagMessages $_YMailTypeFlagMessages)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FlagMessages(array('fid'=>$_YMailTypeFlagMessages->getFid(),'mid'=>$_YMailTypeFlagMessages->getMid(),'setFlags'=>$_YMailTypeFlagMessages->getSetFlags(),'selection'=>$_YMailTypeFlagMessages->getSelection())));
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
	 * @return YMailTypeFlagMessagesResponse
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