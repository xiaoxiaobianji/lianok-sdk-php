<?php declare(strict_types=1);

namespace lianok\core\entity;

abstract class AbstractUploadRequest extends AbstractDockingRequest
{
    /**
     * 图片名称
     */
    public  $fileName;
    /**
     * 图片
     */
    public  $file;
    /**
     * 图片标签
     */
    public  $fileTag;

    /**
     * @return ?string
     */
    public function getFileName(): ?string
    {
        if (isset($this->fileName)) {
            return $this->fileName;
        }
        return null;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getFileTag(): string
    {
        return $this->fileTag;
    }

    /**
     * @param string $fileTag
     */
    public function setFileTag(string $fileTag): void
    {
        $this->fileTag = $fileTag;
    }

}