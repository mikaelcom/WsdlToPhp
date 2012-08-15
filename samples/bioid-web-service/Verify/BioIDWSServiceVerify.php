<?php
/**
 * Class file for BioIDWSServiceVerify
 * @date 15/08/2012
 */
/**
 * Class BioIDWSServiceVerify
 * @date 15/08/2012
 */
class BioIDWSServiceVerify extends BioIDWSWsdlClass
{
	/**
	 * Method to call Verify
	 * @uses BioIDWSWsdlClass::getSoapClient()
	 * @uses BioIDWSWsdlClass::setResult()
	 * @uses BioIDWSWsdlClass::getResult()
	 * @uses BioIDWSWsdlClass::saveLastError()
	 * @uses BioIDWSTypeVerify::getClassId()
	 * @uses BioIDWSTypeVerify::getSamples()
	 * @uses BioIDWSTypeVerify::getFlags()
	 * @param BioIDWSTypeVerify Verify
	 * @return BioIDWSTypeVerifyResponse
	 */
	public function Verify(BioIDWSTypeVerify $_BioIDWSTypeVerify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Verify(array('classId'=>$_BioIDWSTypeVerify->getClassId(),'samples'=>$_BioIDWSTypeVerify->getSamples(),'flags'=>$_BioIDWSTypeVerify->getFlags())));
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
	 * @return BioIDWSTypeVerifyResponse
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