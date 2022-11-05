<?php

namespace App\Traits;
trait HasStatus {
    public function ChangeStatus(){
        $this->status =!$this->status;
        $this->save();
    }

    public function getStatusWithSpan(){
        if(!$this->status) return "<span class='badge badge-warning'> " .  __('translation.in_active')  . " </span>";
        else  return "<span class='badge badge-success'> " .  __('translation.active')  . "</span>";
    }
}
