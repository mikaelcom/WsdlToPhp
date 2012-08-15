<?php
/**
 * Class file for BioIDWSServiceEnroll
 * @date 15/08/2012
 */
/**
 * Class BioIDWSServiceEnroll
 * @date 15/08/2012
 */
class BioIDWSServiceEnroll extends BioIDWSWsdlClass
{
	/**
	 * Method to call Enroll
	 * @uses BioIDWSWsdlClass::getSoapClient()
	 * @uses BioIDWSWsdlClass::setResult()
	 * @uses BioIDWSWsdlClass::getResult()
	 * @uses BioIDWSWsdlClass::saveLastError()
	 * @uses BioIDWSTypeEnroll::getClassId()
	 * @uses BioIDWSTypeEnroll::getSamples()
	 * @uses BioIDWSTypeEnroll::getFlags()
	 * @param BioIDWSTypeEnroll Enroll
	 * @return BioIDWSTypeEnrollResponse
	 */
	public function Enroll(BioIDWSTypeEnroll $_BioIDWSTypeEnroll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Enroll(array('classId'=>$_BioIDWSTypeEnroll->getClassId(),'samples'=>$_BioIDWSTypeEnroll->getSamples(),'flags'=>$_BioIDWSTypeEnroll->getFlags())));
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
	 * @return BioIDWSTypeEnrollResponse
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