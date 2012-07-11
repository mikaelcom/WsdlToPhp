<?php
/**
 * Class file for XiHoldingsTypeGetFormSC13XDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetFormSC13XDetailsResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetFormSC13XDetailsResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetFormSC13XDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeFormSC13X
	 */
	public $GetFormSC13XDetailsResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeFormSC13X GetFormSC13XDetailsResult
	 * @return XiHoldingsTypeGetFormSC13XDetailsResponse
	 */
	public function __construct($_GetFormSC13XDetailsResult = null)
	{
		parent::__construct(array('GetFormSC13XDetailsResult'=>$_GetFormSC13XDetailsResult));
	}
	/**
	 * Set GetFormSC13XDetailsResult
	 * @param FormSC13X GetFormSC13XDetailsResult
	 * @return FormSC13X
	 */
	public function setGetFormSC13XDetailsResult($_GetFormSC13XDetailsResult)
	{
		return ($this->GetFormSC13XDetailsResult = $_GetFormSC13XDetailsResult);
	}
	/**
	 * Get GetFormSC13XDetailsResult
	 * @return XiHoldingsTypeFormSC13X
	 */
	public function getGetFormSC13XDetailsResult()
	{
		return $this->GetFormSC13XDetailsResult;
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