<?php
/**
 * Class file for YMailTypeUserFeaturePref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUserFeaturePref
 * @date 02/07/2012
 */
class YMailTypeUserFeaturePref extends YMailWsdlClass
{
	/**
	 * The silo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $silo;
	/**
	 * The mailRegTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $mailRegTime;
	/**
	 * The mailForward
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $mailForward;
	/**
	 * The hasAddressGuard
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasAddressGuard;
	/**
	 * The intl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $intl;
	/**
	 * The hasMailPlus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasMailPlus;
	/**
	 * The hasStationery
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasStationery;
	/**
	 * The hasAds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasAds;
	/**
	 * The mailboxQuota
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedLong
	 */
	public $mailboxQuota;
	/**
	 * The quotaUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedLong
	 */
	public $quotaUsed;
	/**
	 * The soundNewMail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $soundNewMail;
	/**
	 * The mailCheckInterval
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $mailCheckInterval;
	/**
	 * The partnerType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $partnerType;
	/**
	 * The partnerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $partnerName;
	/**
	 * The attachFiles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $attachFiles;
	/**
	 * The attachFileSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $attachFileSize;
	/**
	 * The attachTotalSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $attachTotalSize;
	/**
	 * The attachTotalEncodedSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $attachTotalEncodedSize;
	/**
	 * The isPremium
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $isPremium;
	/**
	 * The hasArchiving
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasArchiving;
	/**
	 * The hasForwarding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasForwarding;
	/**
	 * The filtersMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $filtersMax;
	/**
	 * The isMaster
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $isMaster;
	/**
	 * The btTier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $btTier;
	/**
	 * The rogersTier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rogersTier;
	/**
	 * The isUpsellEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $isUpsellEnabled;
	/**
	 * The bulkAction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $bulkAction;
	/**
	 * The optInState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $optInState;
	/**
	 * The domainMembership
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $domainMembership;
	/**
	 * Constructor
	 * @param string silo
	 * @param string mailRegTime
	 * @param string mailForward
	 * @param boolean hasAddressGuard
	 * @param string intl
	 * @param boolean hasMailPlus
	 * @param boolean hasStationery
	 * @param boolean hasAds
	 * @param unsignedLong mailboxQuota
	 * @param unsignedLong quotaUsed
	 * @param string soundNewMail
	 * @param int mailCheckInterval
	 * @param string partnerType
	 * @param string partnerName
	 * @param unsignedInt attachFiles
	 * @param unsignedInt attachFileSize
	 * @param unsignedInt attachTotalSize
	 * @param unsignedInt attachTotalEncodedSize
	 * @param boolean isPremium
	 * @param boolean hasArchiving
	 * @param boolean hasForwarding
	 * @param unsignedInt filtersMax
	 * @param boolean isMaster
	 * @param string btTier
	 * @param string rogersTier
	 * @param boolean isUpsellEnabled
	 * @param string bulkAction
	 * @param string optInState
	 * @param string domainMembership
	 * @return YMailTypeUserFeaturePref
	 */
	public function __construct($_silo = null,$_mailRegTime = null,$_mailForward = null,$_hasAddressGuard = null,$_intl = null,$_hasMailPlus = null,$_hasStationery = null,$_hasAds = null,$_mailboxQuota = null,$_quotaUsed = null,$_soundNewMail = null,$_mailCheckInterval = -1,$_partnerType = null,$_partnerName = null,$_attachFiles = null,$_attachFileSize = null,$_attachTotalSize = null,$_attachTotalEncodedSize = null,$_isPremium = null,$_hasArchiving = null,$_hasForwarding = null,$_filtersMax = null,$_isMaster = null,$_btTier = null,$_rogersTier = null,$_isUpsellEnabled = null,$_bulkAction = null,$_optInState = null,$_domainMembership = null)
	{
		parent::__construct(array('silo'=>$_silo,'mailRegTime'=>$_mailRegTime,'mailForward'=>$_mailForward,'hasAddressGuard'=>$_hasAddressGuard,'intl'=>$_intl,'hasMailPlus'=>$_hasMailPlus,'hasStationery'=>$_hasStationery,'hasAds'=>$_hasAds,'mailboxQuota'=>$_mailboxQuota,'quotaUsed'=>$_quotaUsed,'soundNewMail'=>$_soundNewMail,'mailCheckInterval'=>$_mailCheckInterval,'partnerType'=>$_partnerType,'partnerName'=>$_partnerName,'attachFiles'=>$_attachFiles,'attachFileSize'=>$_attachFileSize,'attachTotalSize'=>$_attachTotalSize,'attachTotalEncodedSize'=>$_attachTotalEncodedSize,'isPremium'=>$_isPremium,'hasArchiving'=>$_hasArchiving,'hasForwarding'=>$_hasForwarding,'filtersMax'=>$_filtersMax,'isMaster'=>$_isMaster,'btTier'=>$_btTier,'rogersTier'=>$_rogersTier,'isUpsellEnabled'=>$_isUpsellEnabled,'bulkAction'=>$_bulkAction,'optInState'=>$_optInState,'domainMembership'=>$_domainMembership));
	}
	/**
	 * Set silo
	 * @param string silo
	 * @return string
	 */
	public function setSilo($_silo)
	{
		return ($this->silo = $_silo);
	}
	/**
	 * Get silo
	 * @return string
	 */
	public function getSilo()
	{
		return $this->silo;
	}
	/**
	 * Set mailRegTime
	 * @param string mailRegTime
	 * @return string
	 */
	public function setMailRegTime($_mailRegTime)
	{
		return ($this->mailRegTime = $_mailRegTime);
	}
	/**
	 * Get mailRegTime
	 * @return string
	 */
	public function getMailRegTime()
	{
		return $this->mailRegTime;
	}
	/**
	 * Set mailForward
	 * @param string mailForward
	 * @return string
	 */
	public function setMailForward($_mailForward)
	{
		return ($this->mailForward = $_mailForward);
	}
	/**
	 * Get mailForward
	 * @return string
	 */
	public function getMailForward()
	{
		return $this->mailForward;
	}
	/**
	 * Set hasAddressGuard
	 * @param boolean hasAddressGuard
	 * @return boolean
	 */
	public function setHasAddressGuard($_hasAddressGuard)
	{
		return ($this->hasAddressGuard = $_hasAddressGuard);
	}
	/**
	 * Get hasAddressGuard
	 * @return boolean
	 */
	public function getHasAddressGuard()
	{
		return $this->hasAddressGuard;
	}
	/**
	 * Set intl
	 * @param string intl
	 * @return string
	 */
	public function setIntl($_intl)
	{
		return ($this->intl = $_intl);
	}
	/**
	 * Get intl
	 * @return string
	 */
	public function getIntl()
	{
		return $this->intl;
	}
	/**
	 * Set hasMailPlus
	 * @param boolean hasMailPlus
	 * @return boolean
	 */
	public function setHasMailPlus($_hasMailPlus)
	{
		return ($this->hasMailPlus = $_hasMailPlus);
	}
	/**
	 * Get hasMailPlus
	 * @return boolean
	 */
	public function getHasMailPlus()
	{
		return $this->hasMailPlus;
	}
	/**
	 * Set hasStationery
	 * @param boolean hasStationery
	 * @return boolean
	 */
	public function setHasStationery($_hasStationery)
	{
		return ($this->hasStationery = $_hasStationery);
	}
	/**
	 * Get hasStationery
	 * @return boolean
	 */
	public function getHasStationery()
	{
		return $this->hasStationery;
	}
	/**
	 * Set hasAds
	 * @param boolean hasAds
	 * @return boolean
	 */
	public function setHasAds($_hasAds)
	{
		return ($this->hasAds = $_hasAds);
	}
	/**
	 * Get hasAds
	 * @return boolean
	 */
	public function getHasAds()
	{
		return $this->hasAds;
	}
	/**
	 * Set mailboxQuota
	 * @param unsignedLong mailboxQuota
	 * @return unsignedLong
	 */
	public function setMailboxQuota($_mailboxQuota)
	{
		return ($this->mailboxQuota = $_mailboxQuota);
	}
	/**
	 * Get mailboxQuota
	 * @return unsignedLong
	 */
	public function getMailboxQuota()
	{
		return $this->mailboxQuota;
	}
	/**
	 * Set quotaUsed
	 * @param unsignedLong quotaUsed
	 * @return unsignedLong
	 */
	public function setQuotaUsed($_quotaUsed)
	{
		return ($this->quotaUsed = $_quotaUsed);
	}
	/**
	 * Get quotaUsed
	 * @return unsignedLong
	 */
	public function getQuotaUsed()
	{
		return $this->quotaUsed;
	}
	/**
	 * Set soundNewMail
	 * @param string soundNewMail
	 * @return string
	 */
	public function setSoundNewMail($_soundNewMail)
	{
		return ($this->soundNewMail = $_soundNewMail);
	}
	/**
	 * Get soundNewMail
	 * @return string
	 */
	public function getSoundNewMail()
	{
		return $this->soundNewMail;
	}
	/**
	 * Set mailCheckInterval
	 * @param int mailCheckInterval
	 * @return int
	 */
	public function setMailCheckInterval($_mailCheckInterval)
	{
		return ($this->mailCheckInterval = $_mailCheckInterval);
	}
	/**
	 * Get mailCheckInterval
	 * @return int
	 */
	public function getMailCheckInterval()
	{
		return $this->mailCheckInterval;
	}
	/**
	 * Set partnerType
	 * @param string partnerType
	 * @return string
	 */
	public function setPartnerType($_partnerType)
	{
		return ($this->partnerType = $_partnerType);
	}
	/**
	 * Get partnerType
	 * @return string
	 */
	public function getPartnerType()
	{
		return $this->partnerType;
	}
	/**
	 * Set partnerName
	 * @param string partnerName
	 * @return string
	 */
	public function setPartnerName($_partnerName)
	{
		return ($this->partnerName = $_partnerName);
	}
	/**
	 * Get partnerName
	 * @return string
	 */
	public function getPartnerName()
	{
		return $this->partnerName;
	}
	/**
	 * Set attachFiles
	 * @param unsignedInt attachFiles
	 * @return unsignedInt
	 */
	public function setAttachFiles($_attachFiles)
	{
		return ($this->attachFiles = $_attachFiles);
	}
	/**
	 * Get attachFiles
	 * @return unsignedInt
	 */
	public function getAttachFiles()
	{
		return $this->attachFiles;
	}
	/**
	 * Set attachFileSize
	 * @param unsignedInt attachFileSize
	 * @return unsignedInt
	 */
	public function setAttachFileSize($_attachFileSize)
	{
		return ($this->attachFileSize = $_attachFileSize);
	}
	/**
	 * Get attachFileSize
	 * @return unsignedInt
	 */
	public function getAttachFileSize()
	{
		return $this->attachFileSize;
	}
	/**
	 * Set attachTotalSize
	 * @param unsignedInt attachTotalSize
	 * @return unsignedInt
	 */
	public function setAttachTotalSize($_attachTotalSize)
	{
		return ($this->attachTotalSize = $_attachTotalSize);
	}
	/**
	 * Get attachTotalSize
	 * @return unsignedInt
	 */
	public function getAttachTotalSize()
	{
		return $this->attachTotalSize;
	}
	/**
	 * Set attachTotalEncodedSize
	 * @param unsignedInt attachTotalEncodedSize
	 * @return unsignedInt
	 */
	public function setAttachTotalEncodedSize($_attachTotalEncodedSize)
	{
		return ($this->attachTotalEncodedSize = $_attachTotalEncodedSize);
	}
	/**
	 * Get attachTotalEncodedSize
	 * @return unsignedInt
	 */
	public function getAttachTotalEncodedSize()
	{
		return $this->attachTotalEncodedSize;
	}
	/**
	 * Set isPremium
	 * @param boolean isPremium
	 * @return boolean
	 */
	public function setIsPremium($_isPremium)
	{
		return ($this->isPremium = $_isPremium);
	}
	/**
	 * Get isPremium
	 * @return boolean
	 */
	public function getIsPremium()
	{
		return $this->isPremium;
	}
	/**
	 * Set hasArchiving
	 * @param boolean hasArchiving
	 * @return boolean
	 */
	public function setHasArchiving($_hasArchiving)
	{
		return ($this->hasArchiving = $_hasArchiving);
	}
	/**
	 * Get hasArchiving
	 * @return boolean
	 */
	public function getHasArchiving()
	{
		return $this->hasArchiving;
	}
	/**
	 * Set hasForwarding
	 * @param boolean hasForwarding
	 * @return boolean
	 */
	public function setHasForwarding($_hasForwarding)
	{
		return ($this->hasForwarding = $_hasForwarding);
	}
	/**
	 * Get hasForwarding
	 * @return boolean
	 */
	public function getHasForwarding()
	{
		return $this->hasForwarding;
	}
	/**
	 * Set filtersMax
	 * @param unsignedInt filtersMax
	 * @return unsignedInt
	 */
	public function setFiltersMax($_filtersMax)
	{
		return ($this->filtersMax = $_filtersMax);
	}
	/**
	 * Get filtersMax
	 * @return unsignedInt
	 */
	public function getFiltersMax()
	{
		return $this->filtersMax;
	}
	/**
	 * Set isMaster
	 * @param boolean isMaster
	 * @return boolean
	 */
	public function setIsMaster($_isMaster)
	{
		return ($this->isMaster = $_isMaster);
	}
	/**
	 * Get isMaster
	 * @return boolean
	 */
	public function getIsMaster()
	{
		return $this->isMaster;
	}
	/**
	 * Set btTier
	 * @param string btTier
	 * @return string
	 */
	public function setBtTier($_btTier)
	{
		return ($this->btTier = $_btTier);
	}
	/**
	 * Get btTier
	 * @return string
	 */
	public function getBtTier()
	{
		return $this->btTier;
	}
	/**
	 * Set rogersTier
	 * @param string rogersTier
	 * @return string
	 */
	public function setRogersTier($_rogersTier)
	{
		return ($this->rogersTier = $_rogersTier);
	}
	/**
	 * Get rogersTier
	 * @return string
	 */
	public function getRogersTier()
	{
		return $this->rogersTier;
	}
	/**
	 * Set isUpsellEnabled
	 * @param boolean isUpsellEnabled
	 * @return boolean
	 */
	public function setIsUpsellEnabled($_isUpsellEnabled)
	{
		return ($this->isUpsellEnabled = $_isUpsellEnabled);
	}
	/**
	 * Get isUpsellEnabled
	 * @return boolean
	 */
	public function getIsUpsellEnabled()
	{
		return $this->isUpsellEnabled;
	}
	/**
	 * Set bulkAction
	 * @param string bulkAction
	 * @return string
	 */
	public function setBulkAction($_bulkAction)
	{
		return ($this->bulkAction = $_bulkAction);
	}
	/**
	 * Get bulkAction
	 * @return string
	 */
	public function getBulkAction()
	{
		return $this->bulkAction;
	}
	/**
	 * Set optInState
	 * @param string optInState
	 * @return string
	 */
	public function setOptInState($_optInState)
	{
		return ($this->optInState = $_optInState);
	}
	/**
	 * Get optInState
	 * @return string
	 */
	public function getOptInState()
	{
		return $this->optInState;
	}
	/**
	 * Set domainMembership
	 * @param string domainMembership
	 * @return string
	 */
	public function setDomainMembership($_domainMembership)
	{
		return ($this->domainMembership = $_domainMembership);
	}
	/**
	 * Get domainMembership
	 * @return string
	 */
	public function getDomainMembership()
	{
		return $this->domainMembership;
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