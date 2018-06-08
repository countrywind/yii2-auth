<?php

namespace yiichina\auth\clients;

use yii\authclient\OAuth2;
use yiichina\auth\AuthChoiceAsset;
use Yii;

/**
 * 暂时无法使用
 * Class Alipay
 * @package yiichina\auth\clients
 *
 * @see https://docs.open.alipay.com/284/106001/
 */
class Alipay extends OAuth2
{
    use AuthTrait;

    public $authUrl = 'https://openauth.alipay.com/oauth2/publicAppAuthorize.htm';

    public $tokenUrl = 'https://openapi.alipay.com/gateway.do';

    public $apiBaseUrl = 'https://openapi.alipay.com';

    public $scope = 'auth_user';

    protected function initUserAttributes()
    {

    }
}