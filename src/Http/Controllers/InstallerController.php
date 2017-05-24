<?php

namespace AlibiGhazi\Installer\Http\Controllers;

use AlibiGhazi\Installer\Helpers\DatabaseManager;
use AlibiGhazi\Installer\Helpers\PermissionsManager;
use App\Http\Controllers\Controller;

use AlibiGhazi\Installer\Helpers\RequirementsManager;

class InstallerController extends Controller
{
    public function index()
    {
        return view('installer::index');
    }

    public function requirments(RequirementsManager $r)
    {

        $req = $r->check(config('installer.requirements'));

        return view('installer::requirments', compact('req'));
    }

    public function permissions(PermissionsManager $p)
    {
        $r = $p->checkPermission(config('installer.permissions'));
        return view('installer::permissions', compact('r'));
    }


    public function fixPerm(PermissionsManager $p)
    {
        $folders = config('installer.permissions');
        foreach($folders as $folder => $permission){
            $Perm = octdec((int)$permission);
            $p->fixPermission('../'.$folder, $Perm);
        }
        return redirect('install/permissions');
    }


    public function database(DatabaseManager $dbm)
    {
        $dbm->SetDatabaseParams('localhost', 'root', '', 'mag', null);
        dd($dbm->check());

        return view('installer::database');
    }
}
