<?php
/**
 * Class file for XiInsiderTypeDerivativeHolding
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeDerivativeHolding
 * @date 08/07/2012
 */
class XiInsiderTypeDerivativeHolding extends XiInsiderWsdlClass
{
	/**
	 * The securityTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $securityTitle;
	/**
	 * The conversionOrExercisePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $conversionOrExercisePrice;
	/**
	 * The exerciseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $exerciseDate;
	/**
	 * The expirationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $expirationDate;
	/**
	 * The underlyingSecurity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeUnderlyingSecurity
	 */
	public $underlyingSecurity;
	/**
	 * The ownershipNature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeOwnershipNature
	 */
	public $ownershipNature;
	/**
	 * Constructor
	 * @param XiInsiderTypeValue securityTitle
	 * @param XiInsiderTypeValue conversionOrExercisePrice
	 * @param XiInsiderTypeValue exerciseDate
	 * @param XiInsiderTypeValue expirationDate
	 * @param XiInsiderTypeUnderlyingSecurity underlyingSecurity
	 * @param XiInsiderTypeOwnershipNature ownershipNature
	 * @return XiInsiderTypeDerivativeHolding
	 */
	public function __construct($_securityTitle = null,$_conversionOrExercisePrice = null,$_exerciseDate = null,$_expirationDate = null,$_underlyingSecurity = null,$_ownershipNature = null)
	{
		parent::__construct(array('securityTitle'=>$_securityTitle,'conversionOrExercisePrice'=>$_conversionOrExercisePrice,'exerciseDate'=>$_exerciseDate,'expirationDate'=>$_expirationDate,'underlyingSecurity'=>$_underlyingSecurity,'ownershipNature'=>$_ownershipNature));
	}
	/**
	 * Set securityTitle
	 * @param value securityTitle
	 * @return value
	 */
	public function setSecurityTitle($_securityTitle)
	{
		return ($this->securityTitle = $_securityTitle);
	}
	/**
	 * Get securityTitle
	 * @return XiInsiderTypevalue
	 */
	public function getSecurityTitle()
	{
		return $this->securityTitle;
	}
	/**
	 * Set conversionOrExercisePrice
	 * @param value conversionOrExercisePrice
	 * @return value
	 */
	public function setConversionOrExercisePrice($_conversionOrExercisePrice)
	{
		return ($this->conversionOrExercisePrice = $_conversionOrExercisePrice);
	}
	/**
	 * Get conversionOrExercisePrice
	 * @return XiInsiderTypevalue
	 */
	public function getConversionOrExercisePrice()
	{
		return $this->conversionOrExercisePrice;
	}
	/**
	 * Set exerciseDate
	 * @param value exerciseDate
	 * @return value
	 */
	public function setExerciseDate($_exerciseDate)
	{
		return ($this->exerciseDate = $_exerciseDate);
	}
	/**
	 * Get exerciseDate
	 * @return XiInsiderTypevalue
	 */
	public function getExerciseDate()
	{
		return $this->exerciseDate;
	}
	/**
	 * Set expirationDate
	 * @param value expirationDate
	 * @return value
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
	}
	/**
	 * Get expirationDate
	 * @return XiInsiderTypevalue
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set underlyingSecurity
	 * @param underlyingSecurity underlyingSecurity
	 * @return underlyingSecurity
	 */
	public function setUnderlyingSecurity($_underlyingSecurity)
	{
		return ($this->underlyingSecurity = $_underlyingSecurity);
	}
	/**
	 * Get underlyingSecurity
	 * @return XiInsiderTypeunderlyingSecurity
	 */
	public function getUnderlyingSecurity()
	{
		return $this->underlyingSecurity;
	}
	/**
	 * Set ownershipNature
	 * @param ownershipNature ownershipNature
	 * @return ownershipNature
	 */
	public function setOwnershipNature($_ownershipNature)
	{
		return ($this->ownershipNature = $_ownershipNature);
	}
	/**
	 * Get ownershipNature
	 * @return XiInsiderTypeownershipNature
	 */
	public function getOwnershipNature()
	{
		return $this->ownershipNature;
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