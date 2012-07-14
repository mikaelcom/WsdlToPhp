<?php
/**
 * Class file for PayPalTypeThreeDSecureRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeThreeDSecureRequestType
 * Documentation : The Common 3DS fields. Common for both GTD and DCC API's.
 * @date 14/07/2012
 */
class PayPalTypeThreeDSecureRequestType extends PayPalWsdlClass
{
	/**
	 * The Eci3ds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Eci3ds;
	/**
	 * The Cavv
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Cavv;
	/**
	 * The Xid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Xid;
	/**
	 * The MpiVendor3ds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MpiVendor3ds;
	/**
	 * The AuthStatus3ds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AuthStatus3ds;
	/**
	 * Constructor
	 * @param string Eci3ds
	 * @param string Cavv
	 * @param string Xid
	 * @param string MpiVendor3ds
	 * @param string AuthStatus3ds
	 * @return PayPalTypeThreeDSecureRequestType
	 */
	public function __construct($_Eci3ds = null,$_Cavv = null,$_Xid = null,$_MpiVendor3ds = null,$_AuthStatus3ds = null)
	{
		parent::__construct(array('Eci3ds'=>$_Eci3ds,'Cavv'=>$_Cavv,'Xid'=>$_Xid,'MpiVendor3ds'=>$_MpiVendor3ds,'AuthStatus3ds'=>$_AuthStatus3ds));
	}
	/**
	 * Set Eci3ds
	 * @param string Eci3ds
	 * @return string
	 */
	public function setEci3ds($_Eci3ds)
	{
		return ($this->Eci3ds = $_Eci3ds);
	}
	/**
	 * Get Eci3ds
	 * @return string
	 */
	public function getEci3ds()
	{
		return $this->Eci3ds;
	}
	/**
	 * Set Cavv
	 * @param string Cavv
	 * @return string
	 */
	public function setCavv($_Cavv)
	{
		return ($this->Cavv = $_Cavv);
	}
	/**
	 * Get Cavv
	 * @return string
	 */
	public function getCavv()
	{
		return $this->Cavv;
	}
	/**
	 * Set Xid
	 * @param string Xid
	 * @return string
	 */
	public function setXid($_Xid)
	{
		return ($this->Xid = $_Xid);
	}
	/**
	 * Get Xid
	 * @return string
	 */
	public function getXid()
	{
		return $this->Xid;
	}
	/**
	 * Set MpiVendor3ds
	 * @param string MpiVendor3ds
	 * @return string
	 */
	public function setMpiVendor3ds($_MpiVendor3ds)
	{
		return ($this->MpiVendor3ds = $_MpiVendor3ds);
	}
	/**
	 * Get MpiVendor3ds
	 * @return string
	 */
	public function getMpiVendor3ds()
	{
		return $this->MpiVendor3ds;
	}
	/**
	 * Set AuthStatus3ds
	 * @param string AuthStatus3ds
	 * @return string
	 */
	public function setAuthStatus3ds($_AuthStatus3ds)
	{
		return ($this->AuthStatus3ds = $_AuthStatus3ds);
	}
	/**
	 * Get AuthStatus3ds
	 * @return string
	 */
	public function getAuthStatus3ds()
	{
		return $this->AuthStatus3ds;
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