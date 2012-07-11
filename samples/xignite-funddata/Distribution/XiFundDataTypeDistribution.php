<?php
/**
 * Class file for XiFundDataTypeDistribution
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeDistribution
 * @date 08/07/2012
 */
class XiFundDataTypeDistribution extends XiFundDataWsdlClass
{
	/**
	 * The Advertising
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Advertising;
	/**
	 * The PrintingAndMailing
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PrintingAndMailing;
	/**
	 * The PaymentToUnderwriters
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PaymentToUnderwriters;
	/**
	 * The PaymentToBrokers
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PaymentToBrokers;
	/**
	 * The PaymentToSales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PaymentToSales;
	/**
	 * The PaymentToBanks
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PaymentToBanks;
	/**
	 * The OtherUses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherUses;
	/**
	 * The UnallocatedPayments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $UnallocatedPayments;
	/**
	 * Constructor
	 * @param double Advertising
	 * @param double PrintingAndMailing
	 * @param double PaymentToUnderwriters
	 * @param double PaymentToBrokers
	 * @param double PaymentToSales
	 * @param double PaymentToBanks
	 * @param double OtherUses
	 * @param double UnallocatedPayments
	 * @return XiFundDataTypeDistribution
	 */
	public function __construct($_Advertising,$_PrintingAndMailing,$_PaymentToUnderwriters,$_PaymentToBrokers,$_PaymentToSales,$_PaymentToBanks,$_OtherUses,$_UnallocatedPayments)
	{
		parent::__construct(array('Advertising'=>$_Advertising,'PrintingAndMailing'=>$_PrintingAndMailing,'PaymentToUnderwriters'=>$_PaymentToUnderwriters,'PaymentToBrokers'=>$_PaymentToBrokers,'PaymentToSales'=>$_PaymentToSales,'PaymentToBanks'=>$_PaymentToBanks,'OtherUses'=>$_OtherUses,'UnallocatedPayments'=>$_UnallocatedPayments));
	}
	/**
	 * Set Advertising
	 * @param double Advertising
	 * @return double
	 */
	public function setAdvertising($_Advertising)
	{
		return ($this->Advertising = $_Advertising);
	}
	/**
	 * Get Advertising
	 * @return double
	 */
	public function getAdvertising()
	{
		return $this->Advertising;
	}
	/**
	 * Set PrintingAndMailing
	 * @param double PrintingAndMailing
	 * @return double
	 */
	public function setPrintingAndMailing($_PrintingAndMailing)
	{
		return ($this->PrintingAndMailing = $_PrintingAndMailing);
	}
	/**
	 * Get PrintingAndMailing
	 * @return double
	 */
	public function getPrintingAndMailing()
	{
		return $this->PrintingAndMailing;
	}
	/**
	 * Set PaymentToUnderwriters
	 * @param double PaymentToUnderwriters
	 * @return double
	 */
	public function setPaymentToUnderwriters($_PaymentToUnderwriters)
	{
		return ($this->PaymentToUnderwriters = $_PaymentToUnderwriters);
	}
	/**
	 * Get PaymentToUnderwriters
	 * @return double
	 */
	public function getPaymentToUnderwriters()
	{
		return $this->PaymentToUnderwriters;
	}
	/**
	 * Set PaymentToBrokers
	 * @param double PaymentToBrokers
	 * @return double
	 */
	public function setPaymentToBrokers($_PaymentToBrokers)
	{
		return ($this->PaymentToBrokers = $_PaymentToBrokers);
	}
	/**
	 * Get PaymentToBrokers
	 * @return double
	 */
	public function getPaymentToBrokers()
	{
		return $this->PaymentToBrokers;
	}
	/**
	 * Set PaymentToSales
	 * @param double PaymentToSales
	 * @return double
	 */
	public function setPaymentToSales($_PaymentToSales)
	{
		return ($this->PaymentToSales = $_PaymentToSales);
	}
	/**
	 * Get PaymentToSales
	 * @return double
	 */
	public function getPaymentToSales()
	{
		return $this->PaymentToSales;
	}
	/**
	 * Set PaymentToBanks
	 * @param double PaymentToBanks
	 * @return double
	 */
	public function setPaymentToBanks($_PaymentToBanks)
	{
		return ($this->PaymentToBanks = $_PaymentToBanks);
	}
	/**
	 * Get PaymentToBanks
	 * @return double
	 */
	public function getPaymentToBanks()
	{
		return $this->PaymentToBanks;
	}
	/**
	 * Set OtherUses
	 * @param double OtherUses
	 * @return double
	 */
	public function setOtherUses($_OtherUses)
	{
		return ($this->OtherUses = $_OtherUses);
	}
	/**
	 * Get OtherUses
	 * @return double
	 */
	public function getOtherUses()
	{
		return $this->OtherUses;
	}
	/**
	 * Set UnallocatedPayments
	 * @param double UnallocatedPayments
	 * @return double
	 */
	public function setUnallocatedPayments($_UnallocatedPayments)
	{
		return ($this->UnallocatedPayments = $_UnallocatedPayments);
	}
	/**
	 * Get UnallocatedPayments
	 * @return double
	 */
	public function getUnallocatedPayments()
	{
		return $this->UnallocatedPayments;
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