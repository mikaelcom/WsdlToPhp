<?php
/**
 * Class file for OvhTypeTelephonyPortabilityOrderSpecialNumber
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPortabilityOrderSpecialNumber
 * @date 02/07/2012
 */
class OvhTypeTelephonyPortabilityOrderSpecialNumber extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
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
	 * The desireDate
	 * @var string
	 */
	public $desireDate;
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The custContactName
	 * @var string
	 */
	public $custContactName;
	/**
	 * The custContactNumber
	 * @var string
	 */
	public $custContactNumber;
	/**
	 * The custName
	 * @var string
	 */
	public $custName;
	/**
	 * The custSiret
	 * @var string
	 */
	public $custSiret;
	/**
	 * The custStreetName
	 * @var string
	 */
	public $custStreetName;
	/**
	 * The custStreetNumber
	 * @var string
	 */
	public $custStreetNumber;
	/**
	 * The custBuilding
	 * @var string
	 */
	public $custBuilding;
	/**
	 * The custStair
	 * @var string
	 */
	public $custStair;
	/**
	 * The custFloor
	 * @var string
	 */
	public $custFloor;
	/**
	 * The custDoor
	 * @var string
	 */
	public $custDoor;
	/**
	 * The custZip
	 * @var string
	 */
	public $custZip;
	/**
	 * The custCity
	 * @var string
	 */
	public $custCity;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The evenPorted
	 * @var boolean
	 */
	public $evenPorted;
	/**
	 * The category
	 * @var string
	 */
	public $category;
	/**
	 * The extraNumbers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $extraNumbers;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param string offer
	 * @param string desireDate
	 * @param string callNumber
	 * @param string custContactName
	 * @param string custContactNumber
	 * @param string custName
	 * @param string custSiret
	 * @param string custStreetName
	 * @param string custStreetNumber
	 * @param string custBuilding
	 * @param string custStair
	 * @param string custFloor
	 * @param string custDoor
	 * @param string custZip
	 * @param string custCity
	 * @param string comment
	 * @param boolean evenPorted
	 * @param string category
	 * @param OvhTypeMyArrayOfStringType extraNumbers
	 * @return OvhTypeTelephonyPortabilityOrderSpecialNumber
	 */
	public function __construct($_session = null,$_billingAccount = null,$_offer = null,$_desireDate = null,$_callNumber = null,$_custContactName = null,$_custContactNumber = null,$_custName = null,$_custSiret = null,$_custStreetName = null,$_custStreetNumber = null,$_custBuilding = null,$_custStair = null,$_custFloor = null,$_custDoor = null,$_custZip = null,$_custCity = null,$_comment = null,$_evenPorted = null,$_category = null,$_extraNumbers = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'offer'=>$_offer,'desireDate'=>$_desireDate,'callNumber'=>$_callNumber,'custContactName'=>$_custContactName,'custContactNumber'=>$_custContactNumber,'custName'=>$_custName,'custSiret'=>$_custSiret,'custStreetName'=>$_custStreetName,'custStreetNumber'=>$_custStreetNumber,'custBuilding'=>$_custBuilding,'custStair'=>$_custStair,'custFloor'=>$_custFloor,'custDoor'=>$_custDoor,'custZip'=>$_custZip,'custCity'=>$_custCity,'comment'=>$_comment,'evenPorted'=>$_evenPorted,'category'=>$_category,'extraNumbers'=>new OvhTypeMyArrayOfStringType($_extraNumbers)));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Set desireDate
	 * @param string desireDate
	 * @return string
	 */
	public function setDesireDate($_desireDate)
	{
		return ($this->desireDate = $_desireDate);
	}
	/**
	 * Get desireDate
	 * @return string
	 */
	public function getDesireDate()
	{
		return $this->desireDate;
	}
	/**
	 * Set callNumber
	 * @param string callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get callNumber
	 * @return string
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set custContactName
	 * @param string custContactName
	 * @return string
	 */
	public function setCustContactName($_custContactName)
	{
		return ($this->custContactName = $_custContactName);
	}
	/**
	 * Get custContactName
	 * @return string
	 */
	public function getCustContactName()
	{
		return $this->custContactName;
	}
	/**
	 * Set custContactNumber
	 * @param string custContactNumber
	 * @return string
	 */
	public function setCustContactNumber($_custContactNumber)
	{
		return ($this->custContactNumber = $_custContactNumber);
	}
	/**
	 * Get custContactNumber
	 * @return string
	 */
	public function getCustContactNumber()
	{
		return $this->custContactNumber;
	}
	/**
	 * Set custName
	 * @param string custName
	 * @return string
	 */
	public function setCustName($_custName)
	{
		return ($this->custName = $_custName);
	}
	/**
	 * Get custName
	 * @return string
	 */
	public function getCustName()
	{
		return $this->custName;
	}
	/**
	 * Set custSiret
	 * @param string custSiret
	 * @return string
	 */
	public function setCustSiret($_custSiret)
	{
		return ($this->custSiret = $_custSiret);
	}
	/**
	 * Get custSiret
	 * @return string
	 */
	public function getCustSiret()
	{
		return $this->custSiret;
	}
	/**
	 * Set custStreetName
	 * @param string custStreetName
	 * @return string
	 */
	public function setCustStreetName($_custStreetName)
	{
		return ($this->custStreetName = $_custStreetName);
	}
	/**
	 * Get custStreetName
	 * @return string
	 */
	public function getCustStreetName()
	{
		return $this->custStreetName;
	}
	/**
	 * Set custStreetNumber
	 * @param string custStreetNumber
	 * @return string
	 */
	public function setCustStreetNumber($_custStreetNumber)
	{
		return ($this->custStreetNumber = $_custStreetNumber);
	}
	/**
	 * Get custStreetNumber
	 * @return string
	 */
	public function getCustStreetNumber()
	{
		return $this->custStreetNumber;
	}
	/**
	 * Set custBuilding
	 * @param string custBuilding
	 * @return string
	 */
	public function setCustBuilding($_custBuilding)
	{
		return ($this->custBuilding = $_custBuilding);
	}
	/**
	 * Get custBuilding
	 * @return string
	 */
	public function getCustBuilding()
	{
		return $this->custBuilding;
	}
	/**
	 * Set custStair
	 * @param string custStair
	 * @return string
	 */
	public function setCustStair($_custStair)
	{
		return ($this->custStair = $_custStair);
	}
	/**
	 * Get custStair
	 * @return string
	 */
	public function getCustStair()
	{
		return $this->custStair;
	}
	/**
	 * Set custFloor
	 * @param string custFloor
	 * @return string
	 */
	public function setCustFloor($_custFloor)
	{
		return ($this->custFloor = $_custFloor);
	}
	/**
	 * Get custFloor
	 * @return string
	 */
	public function getCustFloor()
	{
		return $this->custFloor;
	}
	/**
	 * Set custDoor
	 * @param string custDoor
	 * @return string
	 */
	public function setCustDoor($_custDoor)
	{
		return ($this->custDoor = $_custDoor);
	}
	/**
	 * Get custDoor
	 * @return string
	 */
	public function getCustDoor()
	{
		return $this->custDoor;
	}
	/**
	 * Set custZip
	 * @param string custZip
	 * @return string
	 */
	public function setCustZip($_custZip)
	{
		return ($this->custZip = $_custZip);
	}
	/**
	 * Get custZip
	 * @return string
	 */
	public function getCustZip()
	{
		return $this->custZip;
	}
	/**
	 * Set custCity
	 * @param string custCity
	 * @return string
	 */
	public function setCustCity($_custCity)
	{
		return ($this->custCity = $_custCity);
	}
	/**
	 * Get custCity
	 * @return string
	 */
	public function getCustCity()
	{
		return $this->custCity;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set evenPorted
	 * @param boolean evenPorted
	 * @return boolean
	 */
	public function setEvenPorted($_evenPorted)
	{
		return ($this->evenPorted = $_evenPorted);
	}
	/**
	 * Get evenPorted
	 * @return boolean
	 */
	public function getEvenPorted()
	{
		return $this->evenPorted;
	}
	/**
	 * Set category
	 * @param string category
	 * @return string
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set extraNumbers
	 * @param MyArrayOfStringType extraNumbers
	 * @return MyArrayOfStringType
	 */
	public function setExtraNumbers($_extraNumbers)
	{
		return ($this->extraNumbers = $_extraNumbers);
	}
	/**
	 * Get extraNumbers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getExtraNumbers()
	{
		return $this->extraNumbers;
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