<?php
Route::get('install', 'AlibiGhazi\Installer\Http\Controllers\InstallerController@index');
Route::get('install/requirments', 'AlibiGhazi\Installer\Http\Controllers\InstallerController@requirments');
Route::get('install/permissions', 'AlibiGhazi\Installer\Http\Controllers\InstallerController@permissions');
Route::get('install/fixperm', 'AlibiGhazi\Installer\Http\Controllers\InstallerController@fixPerm');

Route::get('install/database', 'AlibiGhazi\Installer\Http\Controllers\InstallerController@database');