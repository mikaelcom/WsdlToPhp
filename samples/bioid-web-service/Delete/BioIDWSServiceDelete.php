<?php
/**
 * Class file for BioIDWSServiceDelete
 * @date 15/08/2012
 */
/**
 * Class BioIDWSServiceDelete
 * @date 15/08/2012
 */
class BioIDWSServiceDelete extends BioIDWSWsdlClass
{
	/**
	 * Method to call DeleteClass
	 * @uses BioIDWSWsdlClass::getSoapClient()
	 * @uses BioIDWSWsdlClass::setResult()
	 * @uses BioIDWSWsdlClass::getResult()
	 * @uses BioIDWSWsdlClass::saveLastError()
	 * @uses BioIDWSTypeDeleteClass::getClassId()
	 * @param BioIDWSTypeDeleteClass DeleteClass
	 * @return BioIDWSTypeDeleteClassResponse
	 */
	public function DeleteClass(BioIDWSTypeDeleteClass $_BioIDWSTypeDeleteClass)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteClass(array('classId'=>$_BioIDWSTypeDeleteClass->getClassId())));
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
	 * @return BioIDWSTypeDeleteClassResponse
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