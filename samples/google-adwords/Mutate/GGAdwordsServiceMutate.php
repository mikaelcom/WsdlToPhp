<?php
/**
 * Class file for GGAdwordsServiceMutate
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsServiceMutate
 * @date 03/07/2012
 */
class GGAdwordsServiceMutate extends GGAdwordsWsdlClass
{
	/**
	 * Method to call mutate
	 * Meta informations :
	 * 	- documentation : Adds, updates, or deletes campaigns. <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the <code>REMOVE</code> operator. To delete a campaign, set its {@link Campaign#status status} to <code>DELETED</code>.</p> @param operations A list of unique operations. The same campaign cannot be specified in more than one operation. @return The list of updated campaigns, returned in the same order as the <code>operations</code> array. @throws ApiException if problems occurred while updating campaign information.
	 * @uses GGAdwordsWsdlClass::getSoapClient()
	 * @uses GGAdwordsWsdlClass::setResult()
	 * @uses GGAdwordsWsdlClass::getResult()
	 * @uses GGAdwordsWsdlClass::saveLastError()
	 * @uses GGAdwordsTypeMutate::getOperations()
	 * @param GGAdwordsTypeMutate Mutate
	 * @return GGAdwordsTypeMutateResponse
	 */
	public function mutate(GGAdwordsTypeMutate $_GGAdwordsTypeMutate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mutate(array('operations'=>$_GGAdwordsTypeMutate->getOperations())));
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
	 * @return GGAdwordsTypeMutateResponse
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