<?php
/**
 * Class file for PayPalTypeManageRecurringPaymentsProfileStatusRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeManageRecurringPaymentsProfileStatusRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeManageRecurringPaymentsProfileStatusRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeStatusChangeActionType
	 */
	public $Action;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $Note;
	/**
	 * Constructor
	 * @param string ProfileID
	 * @param PayPalTypeStatusChangeActionType Action
	 * @param string Note
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusRequestDetailsType
	 */
	public function __construct($_ProfileID,$_Action,$_Note = null)
	{
		parent::__construct(array('ProfileID'=>$_ProfileID,'Action'=>$_Action,'Note'=>$_Note));
	}
	/**
	 * Set ProfileID
	 * @param string ProfileID
	 * @return string
	 */
	public function setProfileID($_ProfileID)
	{
		return ($this->ProfileID = $_ProfileID);
	}
	/**
	 * Get ProfileID
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set Action
	 * @param StatusChangeActionType Action
	 * @return StatusChangeActionType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = PayPalTypeStatusChangeActionType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return PayPalTypeStatusChangeActionType
	 */
	public function getAction()
	{
		return $this->Action;
	}
	/**
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
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