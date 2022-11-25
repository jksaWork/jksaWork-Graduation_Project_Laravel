<?php

namespace App\Traits;
trait HasStatus {
    protected $statusattrubute = 'status';
    protected $status_filed = 'active';
    public function ChangeStatus(){
        $this->{$this->statusattrubute} =!$this->status;
        $this->save();
    }

    public function getStatusWithSpan(){
        if(!$this->{$this->statusattrubute}) return "<span class='badge badge-light-warning'> " .  __('translation.in' . $this->status_filed)  . " </span>";
        else  return "<span class='badge badge-light-success'> " .  __('translation.' . $this->status_filed)  . "</span>";
    }
}
