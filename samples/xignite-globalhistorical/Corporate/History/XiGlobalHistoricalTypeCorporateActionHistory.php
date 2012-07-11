<?php
/**
 * Class file for XiGlobalHistoricalTypeCorporateActionHistory
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeCorporateActionHistory
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeCorporateActionHistory extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The CorporateActions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfCorporateAction
	 */
	public $CorporateActions;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param XiGlobalHistoricalTypeArrayOfCorporateAction CorporateActions
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function __construct($_Security = null,$_CorporateActions = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'CorporateActions'=>new XiGlobalHistoricalTypeArrayOfCorporateAction($_CorporateActions)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set CorporateActions
	 * @param ArrayOfCorporateAction CorporateActions
	 * @return ArrayOfCorporateAction
	 */
	public function setCorporateActions($_CorporateActions)
	{
		return ($this->CorporateActions = $_CorporateActions);
	}
	/**
	 * Get CorporateActions
	 * @return XiGlobalHistoricalTypeArrayOfCorporateAction
	 */
	public function getCorporateActions()
	{
		return $this->CorporateActions;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>