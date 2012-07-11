<?php
/**
 * Class file for EbayTradingTypePictureSetCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureSetCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureSetCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Standard'
	 * Meta informations :
	 * 	- documentation : Default value for requests. The size for the standard, 3-picture set for item pictures.
	 * @return string 'Standard'
	 */
	const VALUE_STANDARD = 'Standard';
	/**
	 * Constant for value 'Supersize'
	 * Meta informations :
	 * 	- documentation : Supersize, 4-picture set. If you specify this value on input, and this value is returned in the response, then in AddItem or a related call, you must specify Item.PictureDetails.PhotoDisplay.Supersize or Item.PictureDetails.PhotoDisplay.PicturePack.
	 * @return string 'Supersize'
	 */
	const VALUE_SUPERSIZE = 'Supersize';
	/**
	 * Constant for value 'Large'
	 * Meta informations :
	 * 	- documentation : When returned as output in the call response, the characters after setid may contain this value if a Supersize image cannot be generated. If this value is returned in the response, then in AddItem or a related call, you must specify Item.PictureDetails.PhotoDisplay.Supersize or Item.PictureDetails.PhotoDisplay.PicturePack.
	 * @return string 'Large'
	 */
	const VALUE_LARGE = 'Large';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureSetCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_STANDARD,self::VALUE_SUPERSIZE,self::VALUE_LARGE,self::VALUE_CUSTOMCODE));
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