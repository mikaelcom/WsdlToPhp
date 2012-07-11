<?php
/**
 * Class file for XWebOrderTypeRequestHeaderType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestHeaderType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestHeaderType extends XWebOrderWsdlClass
{
	/**
	 * The TransControlID
	 * @var TransControlID
	 */
	public $TransControlID;
	/**
	 * The OrderTypeCode
	 * @var OrderTypeCode
	 */
	public $OrderTypeCode;
	/**
	 * The PONbr
	 * @var PONbr
	 */
	public $PONbr;
	/**
	 * The EntityIDCode
	 * @var EntityIDCode
	 */
	public $EntityIDCode;
	/**
	 * The CurrencyCode
	 * @var CurrencyCode
	 */
	public $CurrencyCode;
	/**
	 * The RefNbrs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWebOrderTypeRequestRefNbrsType
	 */
	public $RefNbrs;
	/**
	 * The SalesRequirementCode
	 * @var SalesRequirementCode
	 */
	public $SalesRequirementCode;
	/**
	 * The RequestOrderConfirmation
	 * @var RequestOrderConfirmation
	 */
	public $RequestOrderConfirmation;
	/**
	 * The ThirdPartyFreightAutoApply
	 * @var ThirdPartyFreightAutoApply
	 */
	public $ThirdPartyFreightAutoApply;
	/**
	 * The ActionCode
	 * @var ActionCode
	 */
	public $ActionCode;
	/**
	 * The Amt
	 * @var Amt
	 */
	public $Amt;
	/**
	 * The Date
	 * @var Date
	 */
	public $Date;
	/**
	 * The Name
	 * @var Name
	 */
	public $Name;
	/**
	 * The AddrInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeRequestAddrInfoType
	 */
	public $AddrInfo;
	/**
	 * The CityName
	 * @var CityName
	 */
	public $CityName;
	/**
	 * The StateProvinceCode
	 * @var StateProvinceCode
	 */
	public $StateProvinceCode;
	/**
	 * The PostalCode
	 * @var PostalCode
	 */
	public $PostalCode;
	/**
	 * The ContactName
	 * @var ContactName
	 */
	public $ContactName;
	/**
	 * The ContactPhoneNbr
	 * @var ContactPhoneNbr
	 */
	public $ContactPhoneNbr;
	/**
	 * The OrderLevel
	 * @var OrderLevel
	 */
	public $OrderLevel;
	/**
	 * The ConfigInd
	 * @var ConfigInd
	 */
	public $ConfigInd;
	/**
	 * The OrderMessageHdrType
	 * @var OrderMessageHdrType
	 */
	public $OrderMessageHdrType;
	/**
	 * The OrderMessageHdr
	 * @var OrderMessageHdr
	 */
	public $OrderMessageHdr;
	/**
	 * The EndUserCustomerNbr
	 * @var EndUserCustomerNbr
	 */
	public $EndUserCustomerNbr;
	/**
	 * The EndUserGroupCode
	 * @var EndUserGroupCode
	 */
	public $EndUserGroupCode;
	/**
	 * The EndUserInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeRequestEndUserInfoType
	 */
	public $EndUserInfo;
	/**
	 * The CreditCardInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeRequestCreditCardInfoType
	 */
	public $CreditCardInfo;
	/**
	 * The MyOrderTracker
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeRequestMyOrderTrackerType
	 */
	public $MyOrderTracker;
	/**
	 * Constructor
	 * @param TransControlID TransControlID
	 * @param OrderTypeCode OrderTypeCode
	 * @param PONbr PONbr
	 * @param EntityIDCode EntityIDCode
	 * @param CurrencyCode CurrencyCode
	 * @param XWebOrderTypeRequestRefNbrsType RefNbrs
	 * @param SalesRequirementCode SalesRequirementCode
	 * @param RequestOrderConfirmation RequestOrderConfirmation
	 * @param ThirdPartyFreightAutoApply ThirdPartyFreightAutoApply
	 * @param ActionCode ActionCode
	 * @param Amt Amt
	 * @param Date Date
	 * @param Name Name
	 * @param XWebOrderTypeRequestAddrInfoType AddrInfo
	 * @param CityName CityName
	 * @param StateProvinceCode StateProvinceCode
	 * @param PostalCode PostalCode
	 * @param ContactName ContactName
	 * @param ContactPhoneNbr ContactPhoneNbr
	 * @param OrderLevel OrderLevel
	 * @param ConfigInd ConfigInd
	 * @param OrderMessageHdrType OrderMessageHdrType
	 * @param OrderMessageHdr OrderMessageHdr
	 * @param EndUserCustomerNbr EndUserCustomerNbr
	 * @param EndUserGroupCode EndUserGroupCode
	 * @param XWebOrderTypeRequestEndUserInfoType EndUserInfo
	 * @param XWebOrderTypeRequestCreditCardInfoType CreditCardInfo
	 * @param XWebOrderTypeRequestMyOrderTrackerType MyOrderTracker
	 * @return XWebOrderTypeRequestHeaderType
	 */
	public function __construct($_TransControlID = null,$_OrderTypeCode = null,$_PONbr = null,$_EntityIDCode = null,$_CurrencyCode = null,$_RefNbrs = null,$_SalesRequirementCode = null,$_RequestOrderConfirmation = null,$_ThirdPartyFreightAutoApply = null,$_ActionCode = null,$_Amt = null,$_Date = null,$_Name = null,$_AddrInfo,$_CityName = null,$_StateProvinceCode = null,$_PostalCode = null,$_ContactName = null,$_ContactPhoneNbr = null,$_OrderLevel = null,$_ConfigInd = null,$_OrderMessageHdrType = null,$_OrderMessageHdr = null,$_EndUserCustomerNbr = null,$_EndUserGroupCode = null,$_EndUserInfo = null,$_CreditCardInfo = null,$_MyOrderTracker = null)
	{
		parent::__construct(array('TransControlID'=>$_TransControlID,'OrderTypeCode'=>$_OrderTypeCode,'PONbr'=>$_PONbr,'EntityIDCode'=>$_EntityIDCode,'CurrencyCode'=>$_CurrencyCode,'RefNbrs'=>$_RefNbrs,'SalesRequirementCode'=>$_SalesRequirementCode,'RequestOrderConfirmation'=>$_RequestOrderConfirmation,'ThirdPartyFreightAutoApply'=>$_ThirdPartyFreightAutoApply,'ActionCode'=>$_ActionCode,'Amt'=>$_Amt,'Date'=>$_Date,'Name'=>$_Name,'AddrInfo'=>$_AddrInfo,'CityName'=>$_CityName,'StateProvinceCode'=>$_StateProvinceCode,'PostalCode'=>$_PostalCode,'ContactName'=>$_ContactName,'ContactPhoneNbr'=>$_ContactPhoneNbr,'OrderLevel'=>$_OrderLevel,'ConfigInd'=>$_ConfigInd,'OrderMessageHdrType'=>$_OrderMessageHdrType,'OrderMessageHdr'=>$_OrderMessageHdr,'EndUserCustomerNbr'=>$_EndUserCustomerNbr,'EndUserGroupCode'=>$_EndUserGroupCode,'EndUserInfo'=>$_EndUserInfo,'CreditCardInfo'=>$_CreditCardInfo,'MyOrderTracker'=>$_MyOrderTracker));
	}
	/**
	 * Set TransControlID
	 * @param TransControlID TransControlID
	 * @return TransControlID
	 */
	public function setTransControlID($_TransControlID)
	{
		return ($this->TransControlID = $_TransControlID);
	}
	/**
	 * Get TransControlID
	 * @return TransControlID
	 */
	public function getTransControlID()
	{
		return $this->TransControlID;
	}
	/**
	 * Set OrderTypeCode
	 * @param OrderTypeCode OrderTypeCode
	 * @return OrderTypeCode
	 */
	public function setOrderTypeCode($_OrderTypeCode)
	{
		return ($this->OrderTypeCode = $_OrderTypeCode);
	}
	/**
	 * Get OrderTypeCode
	 * @return OrderTypeCode
	 */
	public function getOrderTypeCode()
	{
		return $this->OrderTypeCode;
	}
	/**
	 * Set PONbr
	 * @param PONbr PONbr
	 * @return PONbr
	 */
	public function setPONbr($_PONbr)
	{
		return ($this->PONbr = $_PONbr);
	}
	/**
	 * Get PONbr
	 * @return PONbr
	 */
	public function getPONbr()
	{
		return $this->PONbr;
	}
	/**
	 * Set EntityIDCode
	 * @param EntityIDCode EntityIDCode
	 * @return EntityIDCode
	 */
	public function setEntityIDCode($_EntityIDCode)
	{
		return ($this->EntityIDCode = $_EntityIDCode);
	}
	/**
	 * Get EntityIDCode
	 * @return EntityIDCode
	 */
	public function getEntityIDCode()
	{
		return $this->EntityIDCode;
	}
	/**
	 * Set CurrencyCode
	 * @param CurrencyCode CurrencyCode
	 * @return CurrencyCode
	 */
	public function setCurrencyCode($_CurrencyCode)
	{
		return ($this->CurrencyCode = $_CurrencyCode);
	}
	/**
	 * Get CurrencyCode
	 * @return CurrencyCode
	 */
	public function getCurrencyCode()
	{
		return $this->CurrencyCode;
	}
	/**
	 * Set RefNbrs
	 * @param RequestRefNbrsType RefNbrs
	 * @return RequestRefNbrsType
	 */
	public function setRefNbrs($_RefNbrs)
	{
		return ($this->RefNbrs = $_RefNbrs);
	}
	/**
	 * Get RefNbrs
	 * @return XWebOrderTypeRequestRefNbrsType
	 */
	public function getRefNbrs()
	{
		return $this->RefNbrs;
	}
	/**
	 * Set SalesRequirementCode
	 * @param SalesRequirementCode SalesRequirementCode
	 * @return SalesRequirementCode
	 */
	public function setSalesRequirementCode($_SalesRequirementCode)
	{
		return ($this->SalesRequirementCode = $_SalesRequirementCode);
	}
	/**
	 * Get SalesRequirementCode
	 * @return SalesRequirementCode
	 */
	public function getSalesRequirementCode()
	{
		return $this->SalesRequirementCode;
	}
	/**
	 * Set RequestOrderConfirmation
	 * @param RequestOrderConfirmation RequestOrderConfirmation
	 * @return RequestOrderConfirmation
	 */
	public function setRequestOrderConfirmation($_RequestOrderConfirmation)
	{
		return ($this->RequestOrderConfirmation = $_RequestOrderConfirmation);
	}
	/**
	 * Get RequestOrderConfirmation
	 * @return RequestOrderConfirmation
	 */
	public function getRequestOrderConfirmation()
	{
		return $this->RequestOrderConfirmation;
	}
	/**
	 * Set ThirdPartyFreightAutoApply
	 * @param ThirdPartyFreightAutoApply ThirdPartyFreightAutoApply
	 * @return ThirdPartyFreightAutoApply
	 */
	public function setThirdPartyFreightAutoApply($_ThirdPartyFreightAutoApply)
	{
		return ($this->ThirdPartyFreightAutoApply = $_ThirdPartyFreightAutoApply);
	}
	/**
	 * Get ThirdPartyFreightAutoApply
	 * @return ThirdPartyFreightAutoApply
	 */
	public function getThirdPartyFreightAutoApply()
	{
		return $this->ThirdPartyFreightAutoApply;
	}
	/**
	 * Set ActionCode
	 * @param ActionCode ActionCode
	 * @return ActionCode
	 */
	public function setActionCode($_ActionCode)
	{
		return ($this->ActionCode = $_ActionCode);
	}
	/**
	 * Get ActionCode
	 * @return ActionCode
	 */
	public function getActionCode()
	{
		return $this->ActionCode;
	}
	/**
	 * Set Amt
	 * @param Amt Amt
	 * @return Amt
	 */
	public function setAmt($_Amt)
	{
		return ($this->Amt = $_Amt);
	}
	/**
	 * Get Amt
	 * @return Amt
	 */
	public function getAmt()
	{
		return $this->Amt;
	}
	/**
	 * Set Date
	 * @param Date Date
	 * @return Date
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return Date
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Name
	 * @param Name Name
	 * @return Name
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return Name
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set AddrInfo
	 * @param RequestAddrInfoType AddrInfo
	 * @return RequestAddrInfoType
	 */
	public function setAddrInfo($_AddrInfo)
	{
		return ($this->AddrInfo = $_AddrInfo);
	}
	/**
	 * Get AddrInfo
	 * @return XWebOrderTypeRequestAddrInfoType
	 */
	public function getAddrInfo()
	{
		return $this->AddrInfo;
	}
	/**
	 * Set CityName
	 * @param CityName CityName
	 * @return CityName
	 */
	public function setCityName($_CityName)
	{
		return ($this->CityName = $_CityName);
	}
	/**
	 * Get CityName
	 * @return CityName
	 */
	public function getCityName()
	{
		return $this->CityName;
	}
	/**
	 * Set StateProvinceCode
	 * @param StateProvinceCode StateProvinceCode
	 * @return StateProvinceCode
	 */
	public function setStateProvinceCode($_StateProvinceCode)
	{
		return ($this->StateProvinceCode = $_StateProvinceCode);
	}
	/**
	 * Get StateProvinceCode
	 * @return StateProvinceCode
	 */
	public function getStateProvinceCode()
	{
		return $this->StateProvinceCode;
	}
	/**
	 * Set PostalCode
	 * @param PostalCode PostalCode
	 * @return PostalCode
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return PostalCode
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set ContactName
	 * @param ContactName ContactName
	 * @return ContactName
	 */
	public function setContactName($_ContactName)
	{
		return ($this->ContactName = $_ContactName);
	}
	/**
	 * Get ContactName
	 * @return ContactName
	 */
	public function getContactName()
	{
		return $this->ContactName;
	}
	/**
	 * Set ContactPhoneNbr
	 * @param ContactPhoneNbr ContactPhoneNbr
	 * @return ContactPhoneNbr
	 */
	public function setContactPhoneNbr($_ContactPhoneNbr)
	{
		return ($this->ContactPhoneNbr = $_ContactPhoneNbr);
	}
	/**
	 * Get ContactPhoneNbr
	 * @return ContactPhoneNbr
	 */
	public function getContactPhoneNbr()
	{
		return $this->ContactPhoneNbr;
	}
	/**
	 * Set OrderLevel
	 * @param OrderLevel OrderLevel
	 * @return OrderLevel
	 */
	public function setOrderLevel($_OrderLevel)
	{
		return ($this->OrderLevel = $_OrderLevel);
	}
	/**
	 * Get OrderLevel
	 * @return OrderLevel
	 */
	public function getOrderLevel()
	{
		return $this->OrderLevel;
	}
	/**
	 * Set ConfigInd
	 * @param ConfigInd ConfigInd
	 * @return ConfigInd
	 */
	public function setConfigInd($_ConfigInd)
	{
		return ($this->ConfigInd = $_ConfigInd);
	}
	/**
	 * Get ConfigInd
	 * @return ConfigInd
	 */
	public function getConfigInd()
	{
		return $this->ConfigInd;
	}
	/**
	 * Set OrderMessageHdrType
	 * @param OrderMessageHdrType OrderMessageHdrType
	 * @return OrderMessageHdrType
	 */
	public function setOrderMessageHdrType($_OrderMessageHdrType)
	{
		return ($this->OrderMessageHdrType = $_OrderMessageHdrType);
	}
	/**
	 * Get OrderMessageHdrType
	 * @return OrderMessageHdrType
	 */
	public function getOrderMessageHdrType()
	{
		return $this->OrderMessageHdrType;
	}
	/**
	 * Set OrderMessageHdr
	 * @param OrderMessageHdr OrderMessageHdr
	 * @return OrderMessageHdr
	 */
	public function setOrderMessageHdr($_OrderMessageHdr)
	{
		return ($this->OrderMessageHdr = $_OrderMessageHdr);
	}
	/**
	 * Get OrderMessageHdr
	 * @return OrderMessageHdr
	 */
	public function getOrderMessageHdr()
	{
		return $this->OrderMessageHdr;
	}
	/**
	 * Set EndUserCustomerNbr
	 * @param EndUserCustomerNbr EndUserCustomerNbr
	 * @return EndUserCustomerNbr
	 */
	public function setEndUserCustomerNbr($_EndUserCustomerNbr)
	{
		return ($this->EndUserCustomerNbr = $_EndUserCustomerNbr);
	}
	/**
	 * Get EndUserCustomerNbr
	 * @return EndUserCustomerNbr
	 */
	public function getEndUserCustomerNbr()
	{
		return $this->EndUserCustomerNbr;
	}
	/**
	 * Set EndUserGroupCode
	 * @param EndUserGroupCode EndUserGroupCode
	 * @return EndUserGroupCode
	 */
	public function setEndUserGroupCode($_EndUserGroupCode)
	{
		return ($this->EndUserGroupCode = $_EndUserGroupCode);
	}
	/**
	 * Get EndUserGroupCode
	 * @return EndUserGroupCode
	 */
	public function getEndUserGroupCode()
	{
		return $this->EndUserGroupCode;
	}
	/**
	 * Set EndUserInfo
	 * @param RequestEndUserInfoType EndUserInfo
	 * @return RequestEndUserInfoType
	 */
	public function setEndUserInfo($_EndUserInfo)
	{
		return ($this->EndUserInfo = $_EndUserInfo);
	}
	/**
	 * Get EndUserInfo
	 * @return XWebOrderTypeRequestEndUserInfoType
	 */
	public function getEndUserInfo()
	{
		return $this->EndUserInfo;
	}
	/**
	 * Set CreditCardInfo
	 * @param RequestCreditCardInfoType CreditCardInfo
	 * @return RequestCreditCardInfoType
	 */
	public function setCreditCardInfo($_CreditCardInfo)
	{
		return ($this->CreditCardInfo = $_CreditCardInfo);
	}
	/**
	 * Get CreditCardInfo
	 * @return XWebOrderTypeRequestCreditCardInfoType
	 */
	public function getCreditCardInfo()
	{
		return $this->CreditCardInfo;
	}
	/**
	 * Set MyOrderTracker
	 * @param RequestMyOrderTrackerType MyOrderTracker
	 * @return RequestMyOrderTrackerType
	 */
	public function setMyOrderTracker($_MyOrderTracker)
	{
		return ($this->MyOrderTracker = $_MyOrderTracker);
	}
	/**
	 * Get MyOrderTracker
	 * @return XWebOrderTypeRequestMyOrderTrackerType
	 */
	public function getMyOrderTracker()
	{
		return $this->MyOrderTracker;
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