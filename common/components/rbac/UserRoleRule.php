<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 05.01.2016
 * Time: 9:29
 */
namespace common\components\rbac;

use Yii;
use yii\rbac\Rule;
use yii\helpers\ArrayHelper;
use common\models\User;

class UserRoleRule extends Rule
{
    public $name = "userRole";

    public function execute($user, $item, $params)
    {
        $user2=ArrayHelper::getValue($params, 'user', User::findOne($user));
        if($user2) {
            $role= $user2->role;
            if ($item->name==='admin') {
                return $role==User::ROLE_ADMIN;
            } elseif ($item->name === 'moder') {
                return $role == User::ROLE_ADMIN || $role==User::ROLE_MODER;
            } elseif ($item->name ==='user') {
                return $role==User::ROLE_ADMIN || $role == User::ROLE_MODER || $role == User::ROLE_USER;
            }
        }

        return false;
    }
}