<?php
/**
 * Class file for YMailTypeUserData
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUserData
 * @date 02/07/2012
 */
class YMailTypeUserData extends YMailWsdlClass
{
	/**
	 * The userFeaturePref
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeUserFeaturePref
	 */
	public $userFeaturePref;
	/**
	 * The userUIPref
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeUserUIPref
	 */
	public $userUIPref;
	/**
	 * The userSpamPref
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeUserSpamPref
	 */
	public $userSpamPref;
	/**
	 * The userVacationPref
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeUserVacationPref
	 */
	public $userVacationPref;
	/**
	 * The userSendPref
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeUserSendPref
	 */
	public $userSendPref;
	/**
	 * The userPopPref
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeUserPopPref
	 */
	public $userPopPref;
	/**
	 * The externalAccounts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeAllExternalAccounts
	 */
	public $externalAccounts;
	/**
	 * The disposableAddresses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeAllDisposableAddresses
	 */
	public $disposableAddresses;
	/**
	 * The aliases
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeAllAliases
	 */
	public $aliases;
	/**
	 * The otherYahooMboxes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeAllOtherYahooMboxes
	 */
	public $otherYahooMboxes;
	/**
	 * The blockedAddresses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeBlockedAddresses
	 */
	public $blockedAddresses;
	/**
	 * The switches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSwitches
	 */
	public $switches;
	/**
	 * The parentalControls
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeParentalControls
	 */
	public $parentalControls;
	/**
	 * The filters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeFilters
	 */
	public $filters;
	/**
	 * Constructor
	 * @param YMailTypeUserFeaturePref userFeaturePref
	 * @param YMailTypeUserUIPref userUIPref
	 * @param YMailTypeUserSpamPref userSpamPref
	 * @param YMailTypeUserVacationPref userVacationPref
	 * @param YMailTypeUserSendPref userSendPref
	 * @param YMailTypeUserPopPref userPopPref
	 * @param YMailTypeAllExternalAccounts externalAccounts
	 * @param YMailTypeAllDisposableAddresses disposableAddresses
	 * @param YMailTypeAllAliases aliases
	 * @param YMailTypeAllOtherYahooMboxes otherYahooMboxes
	 * @param YMailTypeBlockedAddresses blockedAddresses
	 * @param YMailTypeSwitches switches
	 * @param YMailTypeParentalControls parentalControls
	 * @param YMailTypeFilters filters
	 * @return YMailTypeUserData
	 */
	public function __construct($_userFeaturePref,$_userUIPref,$_userSpamPref,$_userVacationPref,$_userSendPref,$_userPopPref,$_externalAccounts = null,$_disposableAddresses = null,$_aliases = null,$_otherYahooMboxes = null,$_blockedAddresses = null,$_switches = null,$_parentalControls = null,$_filters = null)
	{
		parent::__construct(array('userFeaturePref'=>$_userFeaturePref,'userUIPref'=>$_userUIPref,'userSpamPref'=>$_userSpamPref,'userVacationPref'=>$_userVacationPref,'userSendPref'=>$_userSendPref,'userPopPref'=>$_userPopPref,'externalAccounts'=>$_externalAccounts,'disposableAddresses'=>$_disposableAddresses,'aliases'=>$_aliases,'otherYahooMboxes'=>$_otherYahooMboxes,'blockedAddresses'=>$_blockedAddresses,'switches'=>$_switches,'parentalControls'=>$_parentalControls,'filters'=>$_filters));
	}
	/**
	 * Set userFeaturePref
	 * @param UserFeaturePref userFeaturePref
	 * @return UserFeaturePref
	 */
	public function setUserFeaturePref($_userFeaturePref)
	{
		return ($this->userFeaturePref = $_userFeaturePref);
	}
	/**
	 * Get userFeaturePref
	 * @return YMailTypeUserFeaturePref
	 */
	public function getUserFeaturePref()
	{
		return $this->userFeaturePref;
	}
	/**
	 * Set userUIPref
	 * @param UserUIPref userUIPref
	 * @return UserUIPref
	 */
	public function setUserUIPref($_userUIPref)
	{
		return ($this->userUIPref = $_userUIPref);
	}
	/**
	 * Get userUIPref
	 * @return YMailTypeUserUIPref
	 */
	public function getUserUIPref()
	{
		return $this->userUIPref;
	}
	/**
	 * Set userSpamPref
	 * @param UserSpamPref userSpamPref
	 * @return UserSpamPref
	 */
	public function setUserSpamPref($_userSpamPref)
	{
		return ($this->userSpamPref = $_userSpamPref);
	}
	/**
	 * Get userSpamPref
	 * @return YMailTypeUserSpamPref
	 */
	public function getUserSpamPref()
	{
		return $this->userSpamPref;
	}
	/**
	 * Set userVacationPref
	 * @param UserVacationPref userVacationPref
	 * @return UserVacationPref
	 */
	public function setUserVacationPref($_userVacationPref)
	{
		return ($this->userVacationPref = $_userVacationPref);
	}
	/**
	 * Get userVacationPref
	 * @return YMailTypeUserVacationPref
	 */
	public function getUserVacationPref()
	{
		return $this->userVacationPref;
	}
	/**
	 * Set userSendPref
	 * @param UserSendPref userSendPref
	 * @return UserSendPref
	 */
	public function setUserSendPref($_userSendPref)
	{
		return ($this->userSendPref = $_userSendPref);
	}
	/**
	 * Get userSendPref
	 * @return YMailTypeUserSendPref
	 */
	public function getUserSendPref()
	{
		return $this->userSendPref;
	}
	/**
	 * Set userPopPref
	 * @param UserPopPref userPopPref
	 * @return UserPopPref
	 */
	public function setUserPopPref($_userPopPref)
	{
		return ($this->userPopPref = $_userPopPref);
	}
	/**
	 * Get userPopPref
	 * @return YMailTypeUserPopPref
	 */
	public function getUserPopPref()
	{
		return $this->userPopPref;
	}
	/**
	 * Set externalAccounts
	 * @param AllExternalAccounts externalAccounts
	 * @return AllExternalAccounts
	 */
	public function setExternalAccounts($_externalAccounts)
	{
		return ($this->externalAccounts = $_externalAccounts);
	}
	/**
	 * Get externalAccounts
	 * @return YMailTypeAllExternalAccounts
	 */
	public function getExternalAccounts()
	{
		return $this->externalAccounts;
	}
	/**
	 * Set disposableAddresses
	 * @param AllDisposableAddresses disposableAddresses
	 * @return AllDisposableAddresses
	 */
	public function setDisposableAddresses($_disposableAddresses)
	{
		return ($this->disposableAddresses = $_disposableAddresses);
	}
	/**
	 * Get disposableAddresses
	 * @return YMailTypeAllDisposableAddresses
	 */
	public function getDisposableAddresses()
	{
		return $this->disposableAddresses;
	}
	/**
	 * Set aliases
	 * @param AllAliases aliases
	 * @return AllAliases
	 */
	public function setAliases($_aliases)
	{
		return ($this->aliases = $_aliases);
	}
	/**
	 * Get aliases
	 * @return YMailTypeAllAliases
	 */
	public function getAliases()
	{
		return $this->aliases;
	}
	/**
	 * Set otherYahooMboxes
	 * @param AllOtherYahooMboxes otherYahooMboxes
	 * @return AllOtherYahooMboxes
	 */
	public function setOtherYahooMboxes($_otherYahooMboxes)
	{
		return ($this->otherYahooMboxes = $_otherYahooMboxes);
	}
	/**
	 * Get otherYahooMboxes
	 * @return YMailTypeAllOtherYahooMboxes
	 */
	public function getOtherYahooMboxes()
	{
		return $this->otherYahooMboxes;
	}
	/**
	 * Set blockedAddresses
	 * @param BlockedAddresses blockedAddresses
	 * @return BlockedAddresses
	 */
	public function setBlockedAddresses($_blockedAddresses)
	{
		return ($this->blockedAddresses = $_blockedAddresses);
	}
	/**
	 * Get blockedAddresses
	 * @return YMailTypeBlockedAddresses
	 */
	public function getBlockedAddresses()
	{
		return $this->blockedAddresses;
	}
	/**
	 * Set switches
	 * @param Switches switches
	 * @return Switches
	 */
	public function setSwitches($_switches)
	{
		return ($this->switches = $_switches);
	}
	/**
	 * Get switches
	 * @return YMailTypeSwitches
	 */
	public function getSwitches()
	{
		return $this->switches;
	}
	/**
	 * Set parentalControls
	 * @param ParentalControls parentalControls
	 * @return ParentalControls
	 */
	public function setParentalControls($_parentalControls)
	{
		return ($this->parentalControls = $_parentalControls);
	}
	/**
	 * Get parentalControls
	 * @return YMailTypeParentalControls
	 */
	public function getParentalControls()
	{
		return $this->parentalControls;
	}
	/**
	 * Set filters
	 * @param Filters filters
	 * @return Filters
	 */
	public function setFilters($_filters)
	{
		return ($this->filters = $_filters);
	}
	/**
	 * Get filters
	 * @return YMailTypeFilters
	 */
	public function getFilters()
	{
		return $this->filters;
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