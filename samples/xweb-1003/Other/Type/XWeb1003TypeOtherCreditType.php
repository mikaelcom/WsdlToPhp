<?php
/**
 * Class file for XWeb1003TypeOtherCreditType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeOtherCreditType
 * @date 09/07/2012
 */
class XWeb1003TypeOtherCreditType extends XWeb1003WsdlClass
{
	/**
	 * The Description
	 * @var Description
	 */
	public $Description;
	/**
	 * The Amount
	 * @var Amount
	 */
	public $Amount;
	/**
	 * The Other_Credit_Sequence
	 * @var anonymous215
	 */
	public $Other_Credit_Sequence;
	/**
	 * Constructor
	 * @param Description Description
	 * @param Amount Amount
	 * @param anonymous215 Other_Credit_Sequence
	 * @return XWeb1003TypeOtherCreditType
	 */
	public function __construct($_Description = null,$_Amount = null,$_Other_Credit_Sequence = null)
	{
		parent::__construct(array('Description'=>$_Description,'Amount'=>$_Amount,'Other_Credit_Sequence'=>$_Other_Credit_Sequence));
	}
	/**
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return Amount
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Other_Credit_Sequence
	 * @param anonymous215 Other_Credit_Sequence
	 * @return anonymous215
	 */
	public function setOther_Credit_Sequence($_Other_Credit_Sequence)
	{
		return ($this->Other_Credit_Sequence = $_Other_Credit_Sequence);
	}
	/**
	 * Get Other_Credit_Sequence
	 * @return anonymous215
	 */
	public function getOther_Credit_Sequence()
	{
		return $this->Other_Credit_Sequence;
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