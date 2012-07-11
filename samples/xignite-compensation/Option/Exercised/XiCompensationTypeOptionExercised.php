<?php
/**
 * Class file for XiCompensationTypeOptionExercised
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeOptionExercised
 * @date 08/07/2012
 */
class XiCompensationTypeOptionExercised extends XiCompensationTypeCommon
{
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The SourceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceDate;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The SharesAcquiredOnExercise
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $SharesAcquiredOnExercise;
	/**
	 * The ValueRealized
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ValueRealized;
	/**
	 * The NumSecuritiesUnexercisedOptionsExercisable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NumSecuritiesUnexercisedOptionsExercisable;
	/**
	 * The NumSecuritiesUnexercisedOptionsUnexercisable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NumSecuritiesUnexercisedOptionsUnexercisable;
	/**
	 * The ValueOfUnerxercisedOptionsExercisable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ValueOfUnerxercisedOptionsExercisable;
	/**
	 * The ValueOfUnerxercisedOptionsUnexercisable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ValueOfUnerxercisedOptionsUnexercisable;
	/**
	 * Constructor
	 * @param string Source
	 * @param string SourceDate
	 * @param string Currency
	 * @param int SharesAcquiredOnExercise
	 * @param double ValueRealized
	 * @param int NumSecuritiesUnexercisedOptionsExercisable
	 * @param int NumSecuritiesUnexercisedOptionsUnexercisable
	 * @param double ValueOfUnerxercisedOptionsExercisable
	 * @param double ValueOfUnerxercisedOptionsUnexercisable
	 * @return XiCompensationTypeOptionExercised
	 */
	public function __construct($_Source = null,$_SourceDate = null,$_Currency = null,$_SharesAcquiredOnExercise,$_ValueRealized,$_NumSecuritiesUnexercisedOptionsExercisable,$_NumSecuritiesUnexercisedOptionsUnexercisable,$_ValueOfUnerxercisedOptionsExercisable,$_ValueOfUnerxercisedOptionsUnexercisable)
	{
		XiCompensationWsdlClass::__construct(array('Source'=>$_Source,'SourceDate'=>$_SourceDate,'Currency'=>$_Currency,'SharesAcquiredOnExercise'=>$_SharesAcquiredOnExercise,'ValueRealized'=>$_ValueRealized,'NumSecuritiesUnexercisedOptionsExercisable'=>$_NumSecuritiesUnexercisedOptionsExercisable,'NumSecuritiesUnexercisedOptionsUnexercisable'=>$_NumSecuritiesUnexercisedOptionsUnexercisable,'ValueOfUnerxercisedOptionsExercisable'=>$_ValueOfUnerxercisedOptionsExercisable,'ValueOfUnerxercisedOptionsUnexercisable'=>$_ValueOfUnerxercisedOptionsUnexercisable));
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set SourceDate
	 * @param string SourceDate
	 * @return string
	 */
	public function setSourceDate($_SourceDate)
	{
		return ($this->SourceDate = $_SourceDate);
	}
	/**
	 * Get SourceDate
	 * @return string
	 */
	public function getSourceDate()
	{
		return $this->SourceDate;
	}
	/**
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set SharesAcquiredOnExercise
	 * @param int SharesAcquiredOnExercise
	 * @return int
	 */
	public function setSharesAcquiredOnExercise($_SharesAcquiredOnExercise)
	{
		return ($this->SharesAcquiredOnExercise = $_SharesAcquiredOnExercise);
	}
	/**
	 * Get SharesAcquiredOnExercise
	 * @return int
	 */
	public function getSharesAcquiredOnExercise()
	{
		return $this->SharesAcquiredOnExercise;
	}
	/**
	 * Set ValueRealized
	 * @param double ValueRealized
	 * @return double
	 */
	public function setValueRealized($_ValueRealized)
	{
		return ($this->ValueRealized = $_ValueRealized);
	}
	/**
	 * Get ValueRealized
	 * @return double
	 */
	public function getValueRealized()
	{
		return $this->ValueRealized;
	}
	/**
	 * Set NumSecuritiesUnexercisedOptionsExercisable
	 * @param int NumSecuritiesUnexercisedOptionsExercisable
	 * @return int
	 */
	public function setNumSecuritiesUnexercisedOptionsExercisable($_NumSecuritiesUnexercisedOptionsExercisable)
	{
		return ($this->NumSecuritiesUnexercisedOptionsExercisable = $_NumSecuritiesUnexercisedOptionsExercisable);
	}
	/**
	 * Get NumSecuritiesUnexercisedOptionsExercisable
	 * @return int
	 */
	public function getNumSecuritiesUnexercisedOptionsExercisable()
	{
		return $this->NumSecuritiesUnexercisedOptionsExercisable;
	}
	/**
	 * Set NumSecuritiesUnexercisedOptionsUnexercisable
	 * @param int NumSecuritiesUnexercisedOptionsUnexercisable
	 * @return int
	 */
	public function setNumSecuritiesUnexercisedOptionsUnexercisable($_NumSecuritiesUnexercisedOptionsUnexercisable)
	{
		return ($this->NumSecuritiesUnexercisedOptionsUnexercisable = $_NumSecuritiesUnexercisedOptionsUnexercisable);
	}
	/**
	 * Get NumSecuritiesUnexercisedOptionsUnexercisable
	 * @return int
	 */
	public function getNumSecuritiesUnexercisedOptionsUnexercisable()
	{
		return $this->NumSecuritiesUnexercisedOptionsUnexercisable;
	}
	/**
	 * Set ValueOfUnerxercisedOptionsExercisable
	 * @param double ValueOfUnerxercisedOptionsExercisable
	 * @return double
	 */
	public function setValueOfUnerxercisedOptionsExercisable($_ValueOfUnerxercisedOptionsExercisable)
	{
		return ($this->ValueOfUnerxercisedOptionsExercisable = $_ValueOfUnerxercisedOptionsExercisable);
	}
	/**
	 * Get ValueOfUnerxercisedOptionsExercisable
	 * @return double
	 */
	public function getValueOfUnerxercisedOptionsExercisable()
	{
		return $this->ValueOfUnerxercisedOptionsExercisable;
	}
	/**
	 * Set ValueOfUnerxercisedOptionsUnexercisable
	 * @param double ValueOfUnerxercisedOptionsUnexercisable
	 * @return double
	 */
	public function setValueOfUnerxercisedOptionsUnexercisable($_ValueOfUnerxercisedOptionsUnexercisable)
	{
		return ($this->ValueOfUnerxercisedOptionsUnexercisable = $_ValueOfUnerxercisedOptionsUnexercisable);
	}
	/**
	 * Get ValueOfUnerxercisedOptionsUnexercisable
	 * @return double
	 */
	public function getValueOfUnerxercisedOptionsUnexercisable()
	{
		return $this->ValueOfUnerxercisedOptionsUnexercisable;
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