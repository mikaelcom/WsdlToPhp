<?php
/**
 * Class file for BioIDWSServiceIdentify
 * @date 15/08/2012
 */
/**
 * Class BioIDWSServiceIdentify
 * @date 15/08/2012
 */
class BioIDWSServiceIdentify extends BioIDWSWsdlClass
{
	/**
	 * Method to call Identify
	 * @uses BioIDWSWsdlClass::getSoapClient()
	 * @uses BioIDWSWsdlClass::setResult()
	 * @uses BioIDWSWsdlClass::getResult()
	 * @uses BioIDWSWsdlClass::saveLastError()
	 * @uses BioIDWSTypeIdentify::getPartitionId()
	 * @uses BioIDWSTypeIdentify::getSamples()
	 * @uses BioIDWSTypeIdentify::getFlags()
	 * @uses BioIDWSTypeIdentify::getMaxResults()
	 * @param BioIDWSTypeIdentify Identify
	 * @return BioIDWSTypeIdentifyResponse
	 */
	public function Identify(BioIDWSTypeIdentify $_BioIDWSTypeIdentify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Identify(array('partitionId'=>$_BioIDWSTypeIdentify->getPartitionId(),'samples'=>$_BioIDWSTypeIdentify->getSamples(),'flags'=>$_BioIDWSTypeIdentify->getFlags(),'maxResults'=>$_BioIDWSTypeIdentify->getMaxResults())));
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
	 * @return BioIDWSTypeIdentifyResponse
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