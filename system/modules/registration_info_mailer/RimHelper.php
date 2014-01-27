<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Leo Unglaub 2011, MEN AT WORK 2014 
 * @package    registration_info_mailer
 * @license    GNU/LGPL 
 * @filesource
 */

class RimHelper extends Backend
{
    /**
     * clean the input, remove empty entries, trim the values, remove doublicates
     *
     * @param mixed $varValue
     * @param DataContainer $dc
     */
    public function save_sorter($varValue, DataContainer $dc)
    {
        // array_diff remove empty strings
        $arrBuffer = array_diff(array_unique(array_map(trim, explode(',', $varValue))), array(''));
        sort($arrBuffer);
        $strBuffer = implode(',', $arrBuffer);

        return $strBuffer;
    }

    /**
     * format the result to a better readable version
     *
     * @param mixed $varValue
     * @param DataContainer $dc
     */
    public function load_sorter($varValue, DataContainer $dc)
    {
        return str_replace(',', ', ', $varValue);
    }
    
    /**
     * Load the default value from the settings, if no value is set
     * @param type $strValue
     * @param type $dc
     * @return type
     */
    public function setDefaultTemplate($strValue, $dc) {
        if ($strValue == 0 && $GLOBALS['TL_CONFIG'][$dc->field . '_default']) 
        {
            return $GLOBALS['TL_CONFIG'][$dc->field . '_default'];
        }
        return $strValue;
    }    
    
    /**
     * get all available mail tamplates
     */
    public function getMailTemplates($strType)
    {
        $arrReturn = array();
        $objTemplates = $this->Database->prepare('SELECT * FROM tl_nc_notification WHERE type = ? ORDER BY title ASC')->execute($strType);
        
        while($objTemplates->next())
        {
            $arrReturn[$objTemplates->category][$objTemplates->id] = $objTemplates->title;
        }
        
        return $arrReturn;
    }
    
 
    public function getMemberActivationTemplates($strType)
    {
        return $this->getMailTemplates('member_activation_mail');
    }
    
    public function getMemberRegistrationTemplates($strType)
    {
        return $this->getMailTemplates('member_registration_mail');
    }
    
    public function getAccountActivationTemplates($strType)
    {
        return $this->getMailTemplates('account_activation_mail');
    }
    
    public function getAccountDeactivationTemplates($strType)
    {
        return $this->getMailTemplates('account_deactivation_mail');
    }

    /**
     * helper function to uncheck the checkbox
     */
    public function reset_rim_send_mail($strValue) 
    {
        $strValue = 0;
        return $strValue;
    }
}