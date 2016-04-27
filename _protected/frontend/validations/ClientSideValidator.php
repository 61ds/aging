<?php
namespace frontend\validations;

use yii\validators\Validator;

class ClientSideValidator extends Validator
{

    public function init()
    {
        parent::init();
        $this->message = 'field is required.';
    }

    public function validateAttribute($model, $attribute)
    {
    /*https://github.com/yiisoft/yii2/blob/master/docs/guide/input-validation.md#using-client-side-validation-*/
    }

    public function clientValidateAttribute($model, $attribute, $view)
    {

            $message = json_encode($this->message, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            return <<<JS
        var def = $.Deferred();

            if (value != '') {
            stopValidation = true;
            def.reject();
            }
            if (value == '') {

                    messages.push($message);
                    def.resolve();

            }

            if (value == '') {

                    messages.push($message);
                    def.resolve();

            }

            deferred.push(def);
JS;
        }


}