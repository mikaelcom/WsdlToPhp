<?php
/**
 * Class file for JmDataMovieAppTypeCoupon
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeCoupon
 * @date 10/07/2012
 */
class JmDataMovieAppTypeCoupon extends JmDataMovieAppWsdlClass
{
	/**
	 * The ImageLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ImageLink;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * The Barcode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Barcode;
	/**
	 * Constructor
	 * @param string ImageLink
	 * @param string Text
	 * @param string ToDate
	 * @param string Barcode
	 * @return JmDataMovieAppTypeCoupon
	 */
	public function __construct($_ImageLink = null,$_Text = null,$_ToDate = null,$_Barcode = null)
	{
		parent::__construct(array('ImageLink'=>$_ImageLink,'Text'=>$_Text,'ToDate'=>$_ToDate,'Barcode'=>$_Barcode));
	}
	/**
	 * Set ImageLink
	 * @param string ImageLink
	 * @return string
	 */
	public function setImageLink($_ImageLink)
	{
		return ($this->ImageLink = $_ImageLink);
	}
	/**
	 * Get ImageLink
	 * @return string
	 */
	public function getImageLink()
	{
		return $this->ImageLink;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
	}
	/**
	 * Set Barcode
	 * @param string Barcode
	 * @return string
	 */
	public function setBarcode($_Barcode)
	{
		return ($this->Barcode = $_Barcode);
	}
	/**
	 * Get Barcode
	 * @return string
	 */
	public function getBarcode()
	{
		return $this->Barcode;
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