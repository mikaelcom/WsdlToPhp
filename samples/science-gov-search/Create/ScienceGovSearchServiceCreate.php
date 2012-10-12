<?php
/**
 * Class file for ScienceGovSearchServiceCreate
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceCreate
 * @date 13/10/2012
 */
class ScienceGovSearchServiceCreate extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call createSnapshot
	 * Meta informations :
	 * 	- documentation : Request creation of a snapshot based on a set of resultIds
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeCreateSnapshotRequest::getSearchId()
	 * @uses ScienceGovSearchTypeCreateSnapshotRequest::getResultIds()
	 * @param ScienceGovSearchTypeCreateSnapshotRequest CreateSnapshotRequest
	 * @return ScienceGovSearchTypeSnapshotResponse
	 */
	public function createSnapshot(ScienceGovSearchTypeCreateSnapshotRequest $_ScienceGovSearchTypeCreateSnapshotRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->createSnapshot(array('searchId'=>$_ScienceGovSearchTypeCreateSnapshotRequest->getSearchId(),'resultIds'=>$_ScienceGovSearchTypeCreateSnapshotRequest->getResultIds())));
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
	 * @return ScienceGovSearchTypeSnapshotResponse
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