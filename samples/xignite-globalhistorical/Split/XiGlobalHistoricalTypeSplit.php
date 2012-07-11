<?php
/**
 * Class file for XiGlobalHistoricalTypeSplit
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeSplit
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeSplit extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The ExDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExDate;
	/**
	 * The Numerator
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Numerator;
	/**
	 * The Denominator
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Denominator;
	/**
	 * The SplitRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SplitRatio;
	/**
	 * The DataConfidence
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var SplitStatus
	 */
	public $DataConfidence;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param string ExDate
	 * @param double Numerator
	 * @param double Denominator
	 * @param double SplitRatio
	 * @param SplitStatus DataConfidence
	 * @return XiGlobalHistoricalTypeSplit
	 */
	public function __construct($_Security = null,$_ExDate = null,$_Numerator,$_Denominator,$_SplitRatio,$_DataConfidence)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'ExDate'=>$_ExDate,'Numerator'=>$_Numerator,'Denominator'=>$_Denominator,'SplitRatio'=>$_SplitRatio,'DataConfidence'=>$_DataConfidence));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ExDate
	 * @param string ExDate
	 * @return string
	 */
	public function setExDate($_ExDate)
	{
		return ($this->ExDate = $_ExDate);
	}
	/**
	 * Get ExDate
	 * @return string
	 */
	public function getExDate()
	{
		return $this->ExDate;
	}
	/**
	 * Set Numerator
	 * @param double Numerator
	 * @return double
	 */
	public function setNumerator($_Numerator)
	{
		return ($this->Numerator = $_Numerator);
	}
	/**
	 * Get Numerator
	 * @return double
	 */
	public function getNumerator()
	{
		return $this->Numerator;
	}
	/**
	 * Set Denominator
	 * @param double Denominator
	 * @return double
	 */
	public function setDenominator($_Denominator)
	{
		return ($this->Denominator = $_Denominator);
	}
	/**
	 * Get Denominator
	 * @return double
	 */
	public function getDenominator()
	{
		return $this->Denominator;
	}
	/**
	 * Set SplitRatio
	 * @param double SplitRatio
	 * @return double
	 */
	public function setSplitRatio($_SplitRatio)
	{
		return ($this->SplitRatio = $_SplitRatio);
	}
	/**
	 * Get SplitRatio
	 * @return double
	 */
	public function getSplitRatio()
	{
		return $this->SplitRatio;
	}
	/**
	 * Set DataConfidence
	 * @param SplitStatus DataConfidence
	 * @return SplitStatus
	 */
	public function setDataConfidence($_DataConfidence)
	{
		return ($this->DataConfidence = $_DataConfidence);
	}
	/**
	 * Get DataConfidence
	 * @return SplitStatus
	 */
	public function getDataConfidence()
	{
		return $this->DataConfidence;
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