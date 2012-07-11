<?php
/**
 * Class file for YMailTypeSetData
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetData
 * @date 02/07/2012
 */
class YMailTypeSetData extends YMailWsdlClass
{
	/**
	 * The userFeaturePref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetFeaturePref
	 */
	public $userFeaturePref;
	/**
	 * The userUIPref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetUIPref
	 */
	public $userUIPref;
	/**
	 * The userSpamPref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetSpamPref
	 */
	public $userSpamPref;
	/**
	 * The userVacationPref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetVacationPref
	 */
	public $userVacationPref;
	/**
	 * The userSendPref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetSendPref
	 */
	public $userSendPref;
	/**
	 * The userPopPref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetPopPref
	 */
	public $userPopPref;
	/**
	 * The blockedAddresses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetBlockedAddresses
	 */
	public $blockedAddresses;
	/**
	 * The switches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSetSwitches
	 */
	public $switches;
	/**
	 * Constructor
	 * @param YMailTypeSetFeaturePref userFeaturePref
	 * @param YMailTypeSetUIPref userUIPref
	 * @param YMailTypeSetSpamPref userSpamPref
	 * @param YMailTypeSetVacationPref userVacationPref
	 * @param YMailTypeSetSendPref userSendPref
	 * @param YMailTypeSetPopPref userPopPref
	 * @param YMailTypeSetBlockedAddresses blockedAddresses
	 * @param YMailTypeSetSwitches switches
	 * @return YMailTypeSetData
	 */
	public function __construct($_userFeaturePref = null,$_userUIPref = null,$_userSpamPref = null,$_userVacationPref = null,$_userSendPref = null,$_userPopPref = null,$_blockedAddresses = null,$_switches = null)
	{
		parent::__construct(array('userFeaturePref'=>$_userFeaturePref,'userUIPref'=>$_userUIPref,'userSpamPref'=>$_userSpamPref,'userVacationPref'=>$_userVacationPref,'userSendPref'=>$_userSendPref,'userPopPref'=>$_userPopPref,'blockedAddresses'=>$_blockedAddresses,'switches'=>$_switches));
	}
	/**
	 * Set userFeaturePref
	 * @param SetFeaturePref userFeaturePref
	 * @return SetFeaturePref
	 */
	public function setUserFeaturePref($_userFeaturePref)
	{
		return ($this->userFeaturePref = $_userFeaturePref);
	}
	/**
	 * Get userFeaturePref
	 * @return YMailTypeSetFeaturePref
	 */
	public function getUserFeaturePref()
	{
		return $this->userFeaturePref;
	}
	/**
	 * Set userUIPref
	 * @param SetUIPref userUIPref
	 * @return SetUIPref
	 */
	public function setUserUIPref($_userUIPref)
	{
		return ($this->userUIPref = $_userUIPref);
	}
	/**
	 * Get userUIPref
	 * @return YMailTypeSetUIPref
	 */
	public function getUserUIPref()
	{
		return $this->userUIPref;
	}
	/**
	 * Set userSpamPref
	 * @param SetSpamPref userSpamPref
	 * @return SetSpamPref
	 */
	public function setUserSpamPref($_userSpamPref)
	{
		return ($this->userSpamPref = $_userSpamPref);
	}
	/**
	 * Get userSpamPref
	 * @return YMailTypeSetSpamPref
	 */
	public function getUserSpamPref()
	{
		return $this->userSpamPref;
	}
	/**
	 * Set userVacationPref
	 * @param SetVacationPref userVacationPref
	 * @return SetVacationPref
	 */
	public function setUserVacationPref($_userVacationPref)
	{
		return ($this->userVacationPref = $_userVacationPref);
	}
	/**
	 * Get userVacationPref
	 * @return YMailTypeSetVacationPref
	 */
	public function getUserVacationPref()
	{
		return $this->userVacationPref;
	}
	/**
	 * Set userSendPref
	 * @param SetSendPref userSendPref
	 * @return SetSendPref
	 */
	public function setUserSendPref($_userSendPref)
	{
		return ($this->userSendPref = $_userSendPref);
	}
	/**
	 * Get userSendPref
	 * @return YMailTypeSetSendPref
	 */
	public function getUserSendPref()
	{
		return $this->userSendPref;
	}
	/**
	 * Set userPopPref
	 * @param SetPopPref userPopPref
	 * @return SetPopPref
	 */
	public function setUserPopPref($_userPopPref)
	{
		return ($this->userPopPref = $_userPopPref);
	}
	/**
	 * Get userPopPref
	 * @return YMailTypeSetPopPref
	 */
	public function getUserPopPref()
	{
		return $this->userPopPref;
	}
	/**
	 * Set blockedAddresses
	 * @param SetBlockedAddresses blockedAddresses
	 * @return SetBlockedAddresses
	 */
	public function setBlockedAddresses($_blockedAddresses)
	{
		return ($this->blockedAddresses = $_blockedAddresses);
	}
	/**
	 * Get blockedAddresses
	 * @return YMailTypeSetBlockedAddresses
	 */
	public function getBlockedAddresses()
	{
		return $this->blockedAddresses;
	}
	/**
	 * Set switches
	 * @param SetSwitches switches
	 * @return SetSwitches
	 */
	public function setSwitches($_switches)
	{
		return ($this->switches = $_switches);
	}
	/**
	 * Get switches
	 * @return YMailTypeSetSwitches
	 */
	public function getSwitches()
	{
		return $this->switches;
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