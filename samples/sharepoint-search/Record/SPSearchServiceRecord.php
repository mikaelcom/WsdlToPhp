<?php
/**
 * Class file for SPSearchServiceRecord
 * @date 06/07/2012
 */
/**
 * Class SPSearchServiceRecord
 * @date 06/07/2012
 */
class SPSearchServiceRecord extends SPSearchWsdlClass
{
	/**
	 * Method to call RecordClick
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @uses SPSearchTypeRecordClick::getClickInfoXml()
	 * @param SPSearchTypeRecordClick RecordClick
	 * @return SPSearchTypeRecordClickResponse
	 */
	public function RecordClick(SPSearchTypeRecordClick $_SPSearchTypeRecordClick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RecordClick(array('clickInfoXml'=>$_SPSearchTypeRecordClick->getClickInfoXml())));
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
	 * @return SPSearchTypeRecordClickResponse
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