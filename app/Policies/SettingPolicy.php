<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace App\Policies;

use App\Models\User;
use App\Models\Setting;

/**
 * 设置授权策略
 *
 * Class SettingPolicy
 * @package App\Policies
 */
class SettingPolicy extends Policy
{

    public function basic(User $user, Setting $setting)
    {
        return $user->can("manage_setting");
    }

    public function company(User $user, Setting $setting)
    {
        return $user->can("manage_setting");
    }

    public function contact(User $user, Setting $setting)
    {
        return $user->can("manage_setting");
    }
}
