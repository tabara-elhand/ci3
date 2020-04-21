<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_library
{
    public function roadFile($path)
    {
        // ファイル読み込み
        return file_get_contents($path);
    }
}
