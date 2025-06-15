<?php

namespace lesson03\example3\demo05;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\Controller;


class FilterHelper
{
    public static function filter($content)
    {
        return strip_tags($content);
    }
}

class UploadHelper
{
    public static function upload(UploadedFile $file)
    {
        $fileName = uniqid() . '.' . $file->getExtension();
        $file->saveAs(Yii::getAlias('@web/uploads') . DIRECTORY_SEPARATOR . $fileName);
        return $fileName;
    }
}

/*
 * @property $title
 * @property $slug
 * @property $content
 * @property $filter_content
 * @property $image
 */
class Post extends ActiveRecord
{
    use FilterTrait, UploadTrait;
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $this->filter_content = FilterHelper::filter($this->content);
            return true;
        }
        return false;
    }
    private function filter($content)
    {
        return strip_tags($content);
    }
}

/*
 * @property $content
 * @property $filter_content
 */

class Page extends ActiveRecord
{
    use FilterTrait;
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $this->filter_content = FilterHelper::filter($this->content);
            return true;
        }
        return false;
    }
}

/*
 * @property $file
 */


class Article extends ActiveRecord
{
    use UploadTrait;
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $file = $this->file;
            if($file && $file instanceof UploadedFile) {
                $this->file = UploadHelper::upload($this->file);
            }
            return true;
        }
        return false;
    }

}