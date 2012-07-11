<?php
/**
 * Class file for UsgsGazettteerServiceShow
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerServiceShow
 * @date 08/07/2012
 */
class UsgsGazettteerServiceShow extends UsgsGazettteerWsdlClass
{
	/**
	 * Method to call showGazetteerData
	 * @uses UsgsGazettteerWsdlClass::getSoapClient()
	 * @uses UsgsGazettteerWsdlClass::setResult()
	 * @uses UsgsGazettteerWsdlClass::getResult()
	 * @uses UsgsGazettteerWsdlClass::saveLastError()
	 * @uses UsgsGazettteerTypeShowGazetteerData::getX_Value()
	 * @uses UsgsGazettteerTypeShowGazetteerData::getY_Value()
	 * @uses UsgsGazettteerTypeShowGazetteerData::getPlaceType()
	 * @uses UsgsGazettteerTypeShowGazetteerData::getInNumRecords()
	 * @uses UsgsGazettteerTypeShowGazetteerData::getInFirstRecord()
	 * @param UsgsGazettteerTypeShowGazetteerData ShowGazetteerData
	 * @return UsgsGazettteerTypeShowGazetteerDataResponse
	 */
	public function showGazetteerData(UsgsGazettteerTypeShowGazetteerData $_UsgsGazettteerTypeShowGazetteerData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->showGazetteerData(array('X_Value'=>$_UsgsGazettteerTypeShowGazetteerData->getX_Value(),'Y_Value'=>$_UsgsGazettteerTypeShowGazetteerData->getY_Value(),'PlaceType'=>$_UsgsGazettteerTypeShowGazetteerData->getPlaceType(),'inNumRecords'=>$_UsgsGazettteerTypeShowGazetteerData->getInNumRecords(),'inFirstRecord'=>$_UsgsGazettteerTypeShowGazetteerData->getInFirstRecord())));
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
	 * @return UsgsGazettteerTypeShowGazetteerDataResponse
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