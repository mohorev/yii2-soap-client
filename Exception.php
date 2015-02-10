<?php

namespace mongosoft\soapclient;

/**
 * Class Exception
 *
 * @author Alexander Mohorev <dev.mohorev@gmail.com>
 */
class Exception extends \yii\base\Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'SOAP Client Exception';
    }
}
