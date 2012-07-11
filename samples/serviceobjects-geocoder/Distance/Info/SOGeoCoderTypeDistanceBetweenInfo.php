<?php
/**
 * Class file for SOGeoCoderTypeDistanceBetweenInfo
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeDistanceBetweenInfo
 * @date 05/07/2012
 */
class SOGeoCoderTypeDistanceBetweenInfo extends SOGeoCoderWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeErr
	 */
	public $Error;
	/**
	 * The MilesBetween
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MilesBetween;
	/**
	 * The KilometersBetween
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KilometersBetween;
	/**
	 * The FeetBetween
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FeetBetween;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeErr Error
	 * @param string MilesBetween
	 * @param string KilometersBetween
	 * @param string FeetBetween
	 * @return SOGeoCoderTypeDistanceBetweenInfo
	 */
	public function __construct($_Error = null,$_MilesBetween = null,$_KilometersBetween = null,$_FeetBetween = null)
	{
		parent::__construct(array('Error'=>$_Error,'MilesBetween'=>$_MilesBetween,'KilometersBetween'=>$_KilometersBetween,'FeetBetween'=>$_FeetBetween));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOGeoCoderTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set MilesBetween
	 * @param string MilesBetween
	 * @return string
	 */
	public function setMilesBetween($_MilesBetween)
	{
		return ($this->MilesBetween = $_MilesBetween);
	}
	/**
	 * Get MilesBetween
	 * @return string
	 */
	public function getMilesBetween()
	{
		return $this->MilesBetween;
	}
	/**
	 * Set KilometersBetween
	 * @param string KilometersBetween
	 * @return string
	 */
	public function setKilometersBetween($_KilometersBetween)
	{
		return ($this->KilometersBetween = $_KilometersBetween);
	}
	/**
	 * Get KilometersBetween
	 * @return string
	 */
	public function getKilometersBetween()
	{
		return $this->KilometersBetween;
	}
	/**
	 * Set FeetBetween
	 * @param string FeetBetween
	 * @return string
	 */
	public function setFeetBetween($_FeetBetween)
	{
		return ($this->FeetBetween = $_FeetBetween);
	}
	/**
	 * Get FeetBetween
	 * @return string
	 */
	public function getFeetBetween()
	{
		return $this->FeetBetween;
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