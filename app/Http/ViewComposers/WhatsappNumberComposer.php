<?php
/**
 * Created by PhpStorm.
 * User: GMG-Developer
 * Date: 03/04/2018
 * Time: 10:41
 */

namespace App\Http\ViewComposers;

use App\Models\PermissionMenu;
use App\Models\PermissionMenuHeader;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WhatsappNumberComposer
{
    public $randomNumber;
//    public $menuHeader;

    public function __construct()
    {
        $whatsappNoArr = ([
//            '628111737031',
//            '6281299414088',
//            '6281275683180',
//            '6281281944770',
//            '6285255323280',
//            '6285360926500',
//            '6281343982215',
//            '6282329777759',
//            '6281343854525',
//            '6281244923507',
//            '6281807407308',
            '6282329777759',
            '6282346476234',
            '6281343854525',
            '6281354737955',
            '6282337154954',
            '6285255323280',
            '6287841832618',
            '6281343982215',
            '6281807407308',
        ]);

        $randIndex = rand(0, 10);
        $this->randomNumber = $whatsappNoArr[$randIndex];
    }

    public function compose(View $view)
    {
        $data = [
            'randomNumber'       => $this->randomNumber,
//            'menuHeader'    => $this->menuHeader
        ];

        $view->with($data);
    }
}
