<?php
/**
 * Class file for BarCodeSoftTypeDataMatrixFormat
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeDataMatrixFormat
 * @date 02/08/2012
 */
class BarCodeSoftTypeDataMatrixFormat extends BarCodeSoftWsdlClass
{
	/**
	 * Constant for value 'AutoSelect'
	 * @return string 'AutoSelect'
	 */
	const VALUE_AUTOSELECT = 'AutoSelect';
	/**
	 * Constant for value '_10x10'
	 * @return string '_10x10'
	 */
	const VALUE__10X10 = '_10x10';
	/**
	 * Constant for value '_12x12'
	 * @return string '_12x12'
	 */
	const VALUE__12X12 = '_12x12';
	/**
	 * Constant for value '_14x14'
	 * @return string '_14x14'
	 */
	const VALUE__14X14 = '_14x14';
	/**
	 * Constant for value '_16x16'
	 * @return string '_16x16'
	 */
	const VALUE__16X16 = '_16x16';
	/**
	 * Constant for value '_18x18'
	 * @return string '_18x18'
	 */
	const VALUE__18X18 = '_18x18';
	/**
	 * Constant for value '_20x20'
	 * @return string '_20x20'
	 */
	const VALUE__20X20 = '_20x20';
	/**
	 * Constant for value '_22x22'
	 * @return string '_22x22'
	 */
	const VALUE__22X22 = '_22x22';
	/**
	 * Constant for value '_24x24'
	 * @return string '_24x24'
	 */
	const VALUE__24X24 = '_24x24';
	/**
	 * Constant for value '_26x26'
	 * @return string '_26x26'
	 */
	const VALUE__26X26 = '_26x26';
	/**
	 * Constant for value '_32x32'
	 * @return string '_32x32'
	 */
	const VALUE__32X32 = '_32x32';
	/**
	 * Constant for value '_36x36'
	 * @return string '_36x36'
	 */
	const VALUE__36X36 = '_36x36';
	/**
	 * Constant for value '_40x40'
	 * @return string '_40x40'
	 */
	const VALUE__40X40 = '_40x40';
	/**
	 * Constant for value '_44x44'
	 * @return string '_44x44'
	 */
	const VALUE__44X44 = '_44x44';
	/**
	 * Constant for value '_48x48'
	 * @return string '_48x48'
	 */
	const VALUE__48X48 = '_48x48';
	/**
	 * Constant for value '_52x52'
	 * @return string '_52x52'
	 */
	const VALUE__52X52 = '_52x52';
	/**
	 * Constant for value '_64x64'
	 * @return string '_64x64'
	 */
	const VALUE__64X64 = '_64x64';
	/**
	 * Constant for value '_72x72'
	 * @return string '_72x72'
	 */
	const VALUE__72X72 = '_72x72';
	/**
	 * Constant for value '_80x80'
	 * @return string '_80x80'
	 */
	const VALUE__80X80 = '_80x80';
	/**
	 * Constant for value '_88x88'
	 * @return string '_88x88'
	 */
	const VALUE__88X88 = '_88x88';
	/**
	 * Constant for value '_96x96'
	 * @return string '_96x96'
	 */
	const VALUE__96X96 = '_96x96';
	/**
	 * Constant for value '_104x104'
	 * @return string '_104x104'
	 */
	const VALUE__104X104 = '_104x104';
	/**
	 * Constant for value '_120x120'
	 * @return string '_120x120'
	 */
	const VALUE__120X120 = '_120x120';
	/**
	 * Constant for value '_134x134'
	 * @return string '_134x134'
	 */
	const VALUE__134X134 = '_134x134';
	/**
	 * Constant for value '_144x144'
	 * @return string '_144x144'
	 */
	const VALUE__144X144 = '_144x144';
	/**
	 * Constant for value '_8x18'
	 * @return string '_8x18'
	 */
	const VALUE__8X18 = '_8x18';
	/**
	 * Constant for value '_8x32'
	 * @return string '_8x32'
	 */
	const VALUE__8X32 = '_8x32';
	/**
	 * Constant for value '_12x26'
	 * @return string '_12x26'
	 */
	const VALUE__12X26 = '_12x26';
	/**
	 * Constant for value '_12x36'
	 * @return string '_12x36'
	 */
	const VALUE__12X36 = '_12x36';
	/**
	 * Constant for value '_16x36'
	 * @return string '_16x36'
	 */
	const VALUE__16X36 = '_16x36';
	/**
	 * Constant for value '_16x48'
	 * @return string '_16x48'
	 */
	const VALUE__16X48 = '_16x48';
	/**
	 * Constructor
	 * @return BarCodeSoftTypeDataMatrixFormat
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
		return in_array($_value,array(self::VALUE_AUTOSELECT,self::VALUE__10X10,self::VALUE__12X12,self::VALUE__14X14,self::VALUE__16X16,self::VALUE__18X18,self::VALUE__20X20,self::VALUE__22X22,self::VALUE__24X24,self::VALUE__26X26,self::VALUE__32X32,self::VALUE__36X36,self::VALUE__40X40,self::VALUE__44X44,self::VALUE__48X48,self::VALUE__52X52,self::VALUE__64X64,self::VALUE__72X72,self::VALUE__80X80,self::VALUE__88X88,self::VALUE__96X96,self::VALUE__104X104,self::VALUE__120X120,self::VALUE__134X134,self::VALUE__144X144,self::VALUE__8X18,self::VALUE__8X32,self::VALUE__12X26,self::VALUE__12X36,self::VALUE__16X36,self::VALUE__16X48));
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