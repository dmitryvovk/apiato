<?php

namespace App\Containers\Settings\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Collection;

/**
 * Class GetAllSettingsAction
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class GetAllSettingsAction extends Action
{

    /**
     * @param \App\Ship\Parents\Requests\Request $request
     *
     * @return  mixed
     */
    public function run(Request $request) : Collection
    {
        $settings = Apiato::call('Settings@GetAllSettingsTask', [], ['ordered']);

        return $settings;
    }
}
