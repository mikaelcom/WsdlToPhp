<?php
/**
 * Class file for YMailServiceMove
 * @date 02/07/2012
 */
/**
 * Class YMailServiceMove
 * @date 02/07/2012
 */
class YMailServiceMove extends YMailWsdlClass
{
	/**
	 * Method to call MoveMessages
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeMoveMessages::getSourceFid()
	 * @uses YMailTypeMoveMessages::getDestinationFid()
	 * @uses YMailTypeMoveMessages::getMid()
	 * @uses YMailTypeMoveMessages::getSelection()
	 * @param YMailTypeMoveMessages MoveMessages
	 * @return YMailTypeMoveMessagesResponse
	 */
	public function MoveMessages(YMailTypeMoveMessages $_YMailTypeMoveMessages)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MoveMessages(array('sourceFid'=>$_YMailTypeMoveMessages->getSourceFid(),'destinationFid'=>$_YMailTypeMoveMessages->getDestinationFid(),'mid'=>$_YMailTypeMoveMessages->getMid(),'selection'=>$_YMailTypeMoveMessages->getSelection())));
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
	 * @return YMailTypeMoveMessagesResponse
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