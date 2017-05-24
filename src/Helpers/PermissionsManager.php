<?php
namespace AlibiGhazi\Installer\Helpers;


class PermissionsManager
{
    /**
     * @var array
     */
    protected $results = [];
    /**
     * Set the result array permissions and errors.
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->results['permissions'] = [];
        $this->results['errors'] = false;
    }
    /**
     * Check for the folders permissions.
     *
     * @param array $folders
     * @return array
     */
    public function checkPermission(array $folders)
    {
        foreach($folders as $folder => $permission)
        {
            if(!($this->getPermission($folder) >= $permission))
            {
                $this->addFileAndSetErrors($folder, $permission, false, $this->getPermission($folder));
            }
            else {
                $this->addFile($folder, $permission, true, $this->getPermission($folder));
            }
        }
        return $this->results;
    }
    /**
     * Get a folder permission.
     *
     * @param $folder
     * @return string
     */
    private function getPermission($folder)
    {
        return substr(sprintf('%o', fileperms(base_path($folder))), -4);
    }
    /**
     * Add the file to the list of results.
     *
     * @param $folder
     * @param $permission
     * @param $isSet
     */
    private function addFile($folder, $permission, $isSet)
    {
        array_push($this->results['permissions'], [
            'folder' => $folder,
            'permission' => $permission,
            'isSet' => $isSet
        ]);
    }
    /**
     * Add the file and set the errors.
     *
     * @param $folder
     * @param $permission
     * @param $isSet
     */
    private function addFileAndSetErrors($folder, $permission, $isSet)
    {
        $this->addFile($folder, $permission, $isSet);
        $this->results['errors'] = true;
    }




    public function fixPermission($path, $Perm) {

        if (is_file($path)) {
            chmod($path, $Perm);
        } elseif (is_dir($path)) {
            $foldersAndFiles = scandir($path);
            $entries = array_slice($foldersAndFiles, 2);

            foreach ($entries as $entry) {

                $this->fixPermission($path."/".$entry, $Perm);
            }
            chmod($path, $Perm);
        }
    }




}