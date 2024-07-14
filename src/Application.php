<?php
namespace syships\qiniu;

use Qiniu\Auth;
use yii\base\InvalidConfigException;

/**
 * 
 */
class Application
{
    public $accessKey;

    public $secretKey;

    public $options;

    public function __construct()
    {
        if ($this->accessKey === null) {
            throw new InvalidConfigException('Qiniu::accessKey must be set.');
        }
        if ($this->secretKey === null) {
            throw new InvalidConfigException('Qiniu::secretKey must be set.');
        }
    }

    /**
     * @return Auth
     */
    public function Auth(){
        return new Auth($this->accessKey, $this->secretKey, $this->options);
    }
}
