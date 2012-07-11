<?php
/**
 * Class file for UsgsGazettteerServiceSearch
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerServiceSearch
 * @date 08/07/2012
 */
class UsgsGazettteerServiceSearch extends UsgsGazettteerWsdlClass
{
	/**
	 * Method to call searchName
	 * @uses UsgsGazettteerWsdlClass::getSoapClient()
	 * @uses UsgsGazettteerWsdlClass::setResult()
	 * @uses UsgsGazettteerWsdlClass::getResult()
	 * @uses UsgsGazettteerWsdlClass::saveLastError()
	 * @uses UsgsGazettteerTypeSearchName::getPlaceName()
	 * @uses UsgsGazettteerTypeSearchName::getPlaceType()
	 * @uses UsgsGazettteerTypeSearchName::getInNumRecords()
	 * @uses UsgsGazettteerTypeSearchName::getInFirstRecord()
	 * @param UsgsGazettteerTypeSearchName SearchName
	 * @return UsgsGazettteerTypeSearchNameResponse
	 */
	public function searchName(UsgsGazettteerTypeSearchName $_UsgsGazettteerTypeSearchName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->searchName(array('PlaceName'=>$_UsgsGazettteerTypeSearchName->getPlaceName(),'PlaceType'=>$_UsgsGazettteerTypeSearchName->getPlaceType(),'inNumRecords'=>$_UsgsGazettteerTypeSearchName->getInNumRecords(),'inFirstRecord'=>$_UsgsGazettteerTypeSearchName->getInFirstRecord())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call searchLocalName
	 * @uses UsgsGazettteerWsdlClass::getSoapClient()
	 * @uses UsgsGazettteerWsdlClass::setResult()
	 * @uses UsgsGazettteerWsdlClass::getResult()
	 * @uses UsgsGazettteerWsdlClass::saveLastError()
	 * @uses UsgsGazettteerTypeSearchLocalName::getMin_X_Value()
	 * @uses UsgsGazettteerTypeSearchLocalName::getMin_Y_Value()
	 * @uses UsgsGazettteerTypeSearchLocalName::getMax_X_Value()
	 * @uses UsgsGazettteerTypeSearchLocalName::getMax_Y_Value()
	 * @uses UsgsGazettteerTypeSearchLocalName::getPlaceName()
	 * @uses UsgsGazettteerTypeSearchLocalName::getPlaceType()
	 * @uses UsgsGazettteerTypeSearchLocalName::getInNumRecords()
	 * @uses UsgsGazettteerTypeSearchLocalName::getInFirstRecord()
	 * @param UsgsGazettteerTypeSearchLocalName SearchLocalName
	 * @return UsgsGazettteerTypeSearchLocalNameResponse
	 */
	public function searchLocalName(UsgsGazettteerTypeSearchLocalName $_UsgsGazettteerTypeSearchLocalName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->searchLocalName(array('Min_X_Value'=>$_UsgsGazettteerTypeSearchLocalName->getMin_X_Value(),'Min_Y_Value'=>$_UsgsGazettteerTypeSearchLocalName->getMin_Y_Value(),'Max_X_Value'=>$_UsgsGazettteerTypeSearchLocalName->getMax_X_Value(),'Max_Y_Value'=>$_UsgsGazettteerTypeSearchLocalName->getMax_Y_Value(),'PlaceName'=>$_UsgsGazettteerTypeSearchLocalName->getPlaceName(),'PlaceType'=>$_UsgsGazettteerTypeSearchLocalName->getPlaceType(),'inNumRecords'=>$_UsgsGazettteerTypeSearchLocalName->getInNumRecords(),'inFirstRecord'=>$_UsgsGazettteerTypeSearchLocalName->getInFirstRecord())));
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
	 * @return UsgsGazettteerTypeSearchLocalNameResponse
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