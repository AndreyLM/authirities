<?php

namespace common\models\dprch;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property string $id
 * @property string $name
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $imageFiles;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }
//
    public function behaviors()
    {
        return [
            'imageFile' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 64],
            [['imageFiles'], 'file', 'maxFiles'=>5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function upload()
    {
        if ($this->validate())
        {
            foreach($this->imageFiles as $image) {
                $path=Yii::$app->basePath.'/images/'. $image->baseName.'.'. $image->extension;
//            echo $path; die;
                $image->saveAs($path);
                $this->attachImage($path);
                unlink($path);
            }

            return true;
        }

        return false;
    }

    public function delete()
    {
        $this->removeImages();
        parent::delete();
    }
}
