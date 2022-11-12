<?php

namespace App\Traits;
trait HasStatus {
    protected $statusattrubute = 'status';
    public function ChangeStatus(){
        $this->{$this->statusattrubute} =!$this->status;
        $this->save();
    }

    public function getStatusWithSpan(){
        if(!$this->{$this->statusattrubute}) return "<span class='badge badge-warning'> " .  __('translation.in_active')  . " </span>";
        else  return "<span class='badge badge-success'> " .  __('translation.active')  . "</span>";
    }
}
