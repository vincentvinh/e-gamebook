<?php

namespace EGamebookBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Fichier
 */
class Fichier
{
    /**
     * @var array
     */
    private $srcs = array();
    /**
     * Set urls
     *
     * @param array $urls
     *
     * @return Fichier
     */
    public function setSrcs($src)
    {
         foreach ($src as $url){
            array_push($this->srcs, $url);
        }
        return $this;
    }
    /**
     * Get urls
     *
     * @return array
     */
    public function getSrcs()
    {
        $srcs = array();
        foreach ($this->srcs as $url){
            array_push($srcs, $url);
        }
        return $srcs;
    }
    public $files;

    protected function getUploadDir()
    {
        return 'bundles/platform/img/';
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
    public function upload($files)
    {
        if ($files){
            foreach($files as $file)
            {
                $url = uniqid() . "." . $file->guessExtension();
                array_push($this->srcs, $url);
                $file->move($this->getUploadRootDir(), $url);
                unset($file);
            }
        }
    }
    public function removeUpload($files)
    {
        if (gettype($files) == 'array'){
            foreach ($files as $file){
                if ($file = $this->getUploadRootDir().'/'.$file) {
                    unlink($file);
                }
            }
        }
        else{
            if (false !== $key = array_search($files, $this->srcs, true)) {
                unset($this->srcs[$key]);
                $this->srcs = array_values($this->srcs);
                unlink($this->getUploadRootDir().'/'.$files);
            }
        }
    }
    // GENERATED CODE //


    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


}
