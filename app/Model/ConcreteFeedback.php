<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pavlov
 * Date: 28.03.2020
 * Time: 20:03
 */

namespace App\Model;
use App\Feedback;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ConcreteFeedback extends AbstractFeedback
{
    private $table = 'feedbacks';
    private $feedback;


    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;
    }

    public function createModel()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            foreach ($this->fields as $field) {
                $table->string($field);
            }
            $table->rememberToken();
            $table->timestamps();
        });
    }

    function saveFeedback(Array $fields)
    {
        foreach ($fields as $name=>$field) {
            $this->feedback->$name = $field;
        }
        return $this->feedback->save();
    }

    function getAllFeedbacks()
    {
        return $this->feedback->all();
    }

}