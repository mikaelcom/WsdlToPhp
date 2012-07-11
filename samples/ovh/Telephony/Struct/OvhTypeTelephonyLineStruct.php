<?php
/**
 * Class file for OvhTypeTelephonyLineStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The expirationDate
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The betaGamaOffer
	 * @var boolean
	 */
	public $betaGamaOffer;
	/**
	 * The setOn
	 * @var string
	 */
	public $setOn;
	/**
	 * The aliasPool
	 * @var OvhTypeTelephonyLineAliasPoolStruct
	 */
	public $aliasPool;
	/**
	 * The pendingAction
	 * @var OvhTypeTelephonyPendingActionStruct
	 */
	public $pendingAction;
	/**
	 * Constructor
	 * @param string number
	 * @param string billingAccount
	 * @param string offer
	 * @param string type
	 * @param string service
	 * @param string expirationDate
	 * @param string description
	 * @param boolean betaGamaOffer
	 * @param string setOn
	 * @param OvhTypeTelephonyLineAliasPoolStruct aliasPool
	 * @param OvhTypeTelephonyPendingActionStruct pendingAction
	 * @return OvhTypeTelephonyLineStruct
	 */
	public function __construct($_number = null,$_billingAccount = null,$_offer = null,$_type = null,$_service = null,$_expirationDate = null,$_description = null,$_betaGamaOffer = null,$_setOn = null,$_aliasPool = null,$_pendingAction = null)
	{
		parent::__construct(array('number'=>$_number,'billingAccount'=>$_billingAccount,'offer'=>$_offer,'type'=>$_type,'service'=>$_service,'expirationDate'=>$_expirationDate,'description'=>$_description,'betaGamaOffer'=>$_betaGamaOffer,'setOn'=>$_setOn,'aliasPool'=>$_aliasPool,'pendingAction'=>$_pendingAction));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set billingAccount
	 * @param string billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get billingAccount
	 * @return string
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set service
	 * @param string service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get service
	 * @return string
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set expirationDate
	 * @param string expirationDate
	 * @return string
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
	}
	/**
	 * Get expirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set betaGamaOffer
	 * @param boolean betaGamaOffer
	 * @return boolean
	 */
	public function setBetaGamaOffer($_betaGamaOffer)
	{
		return ($this->betaGamaOffer = $_betaGamaOffer);
	}
	/**
	 * Get betaGamaOffer
	 * @return boolean
	 */
	public function getBetaGamaOffer()
	{
		return $this->betaGamaOffer;
	}
	/**
	 * Set setOn
	 * @param string setOn
	 * @return string
	 */
	public function setSetOn($_setOn)
	{
		return ($this->setOn = $_setOn);
	}
	/**
	 * Get setOn
	 * @return string
	 */
	public function getSetOn()
	{
		return $this->setOn;
	}
	/**
	 * Set aliasPool
	 * @param telephonyLineAliasPoolStruct aliasPool
	 * @return telephonyLineAliasPoolStruct
	 */
	public function setAliasPool($_aliasPool)
	{
		return ($this->aliasPool = $_aliasPool);
	}
	/**
	 * Get aliasPool
	 * @return OvhTypetelephonyLineAliasPoolStruct
	 */
	public function getAliasPool()
	{
		return $this->aliasPool;
	}
	/**
	 * Set pendingAction
	 * @param telephonyPendingActionStruct pendingAction
	 * @return telephonyPendingActionStruct
	 */
	public function setPendingAction($_pendingAction)
	{
		return ($this->pendingAction = $_pendingAction);
	}
	/**
	 * Get pendingAction
	 * @return OvhTypetelephonyPendingActionStruct
	 */
	public function getPendingAction()
	{
		return $this->pendingAction;
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