<?php
/**
 * Class file for XWeb1003TypeIncomeType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeIncomeType
 * @date 09/07/2012
 */
class XWeb1003TypeIncomeType extends XWeb1003WsdlClass
{
	/**
	 * The Base_Employment
	 * @var Base_Employment
	 */
	public $Base_Employment;
	/**
	 * The Overtime
	 * @var Overtime
	 */
	public $Overtime;
	/**
	 * The Bonuses
	 * @var Bonuses
	 */
	public $Bonuses;
	/**
	 * The Commissions
	 * @var Commissions
	 */
	public $Commissions;
	/**
	 * The Dividents_Interest
	 * @var Dividents_Interest
	 */
	public $Dividents_Interest;
	/**
	 * The Net_Rental_Income
	 * @var Net_Rental_Income
	 */
	public $Net_Rental_Income;
	/**
	 * The Other_1
	 * @var Other_1
	 */
	public $Other_1;
	/**
	 * The Other_2
	 * @var Other_2
	 */
	public $Other_2;
	/**
	 * The Other_Income_Sources
	 * @var XWeb1003TypeOther_Income_Sources
	 */
	public $Other_Income_Sources;
	/**
	 * Constructor
	 * @param Base_Employment Base_Employment
	 * @param Overtime Overtime
	 * @param Bonuses Bonuses
	 * @param Commissions Commissions
	 * @param Dividents_Interest Dividents_Interest
	 * @param Net_Rental_Income Net_Rental_Income
	 * @param Other_1 Other_1
	 * @param Other_2 Other_2
	 * @param XWeb1003TypeOther_Income_Sources Other_Income_Sources
	 * @return XWeb1003TypeIncomeType
	 */
	public function __construct($_Base_Employment = null,$_Overtime = null,$_Bonuses = null,$_Commissions = null,$_Dividents_Interest = null,$_Net_Rental_Income = null,$_Other_1 = null,$_Other_2 = null,$_Other_Income_Sources = null)
	{
		parent::__construct(array('Base_Employment'=>$_Base_Employment,'Overtime'=>$_Overtime,'Bonuses'=>$_Bonuses,'Commissions'=>$_Commissions,'Dividents_Interest'=>$_Dividents_Interest,'Net_Rental_Income'=>$_Net_Rental_Income,'Other_1'=>$_Other_1,'Other_2'=>$_Other_2,'Other_Income_Sources'=>$_Other_Income_Sources));
	}
	/**
	 * Set Base_Employment
	 * @param Base_Employment Base_Employment
	 * @return Base_Employment
	 */
	public function setBase_Employment($_Base_Employment)
	{
		return ($this->Base_Employment = $_Base_Employment);
	}
	/**
	 * Get Base_Employment
	 * @return Base_Employment
	 */
	public function getBase_Employment()
	{
		return $this->Base_Employment;
	}
	/**
	 * Set Overtime
	 * @param Overtime Overtime
	 * @return Overtime
	 */
	public function setOvertime($_Overtime)
	{
		return ($this->Overtime = $_Overtime);
	}
	/**
	 * Get Overtime
	 * @return Overtime
	 */
	public function getOvertime()
	{
		return $this->Overtime;
	}
	/**
	 * Set Bonuses
	 * @param Bonuses Bonuses
	 * @return Bonuses
	 */
	public function setBonuses($_Bonuses)
	{
		return ($this->Bonuses = $_Bonuses);
	}
	/**
	 * Get Bonuses
	 * @return Bonuses
	 */
	public function getBonuses()
	{
		return $this->Bonuses;
	}
	/**
	 * Set Commissions
	 * @param Commissions Commissions
	 * @return Commissions
	 */
	public function setCommissions($_Commissions)
	{
		return ($this->Commissions = $_Commissions);
	}
	/**
	 * Get Commissions
	 * @return Commissions
	 */
	public function getCommissions()
	{
		return $this->Commissions;
	}
	/**
	 * Set Dividents_Interest
	 * @param Dividents_Interest Dividents_Interest
	 * @return Dividents_Interest
	 */
	public function setDividents_Interest($_Dividents_Interest)
	{
		return ($this->Dividents_Interest = $_Dividents_Interest);
	}
	/**
	 * Get Dividents_Interest
	 * @return Dividents_Interest
	 */
	public function getDividents_Interest()
	{
		return $this->Dividents_Interest;
	}
	/**
	 * Set Net_Rental_Income
	 * @param Net_Rental_Income Net_Rental_Income
	 * @return Net_Rental_Income
	 */
	public function setNet_Rental_Income($_Net_Rental_Income)
	{
		return ($this->Net_Rental_Income = $_Net_Rental_Income);
	}
	/**
	 * Get Net_Rental_Income
	 * @return Net_Rental_Income
	 */
	public function getNet_Rental_Income()
	{
		return $this->Net_Rental_Income;
	}
	/**
	 * Set Other_1
	 * @param Other_1 Other_1
	 * @return Other_1
	 */
	public function setOther_1($_Other_1)
	{
		return ($this->Other_1 = $_Other_1);
	}
	/**
	 * Get Other_1
	 * @return Other_1
	 */
	public function getOther_1()
	{
		return $this->Other_1;
	}
	/**
	 * Set Other_2
	 * @param Other_2 Other_2
	 * @return Other_2
	 */
	public function setOther_2($_Other_2)
	{
		return ($this->Other_2 = $_Other_2);
	}
	/**
	 * Get Other_2
	 * @return Other_2
	 */
	public function getOther_2()
	{
		return $this->Other_2;
	}
	/**
	 * Set Other_Income_Sources
	 * @param Other_Income_Sources Other_Income_Sources
	 * @return Other_Income_Sources
	 */
	public function setOther_Income_Sources($_Other_Income_Sources)
	{
		return ($this->Other_Income_Sources = $_Other_Income_Sources);
	}
	/**
	 * Get Other_Income_Sources
	 * @return XWeb1003TypeOther_Income_Sources
	 */
	public function getOther_Income_Sources()
	{
		return $this->Other_Income_Sources;
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